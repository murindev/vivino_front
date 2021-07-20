<?php


namespace App\Http\Controllers\Catalog;


use App\Http\Controllers\Constant;
use App\Http\Controllers\Controller;
use App\Models\Catalog\Product;
use App\Models\Catalog\Vivino;
use App\Models\Props\PropGrape;
use App\Models\Props\VivinoFood;
use App\Models\Props\VivinoHighlight;
use App\Models\Props\VivinoReview;
use App\Models\Props\VivinoStyle;
use App\Models\Props\VivinoWinery;
use mysql_xdevapi\Exception;

class ItemController extends Controller
{


    public $json = [];


    public function getJson($vintage_id,$wine_id){
        $json = [];
        if($vintage_id && $wine_id){
            try {
                $jsonFile = file_get_contents('http://vinobaza.tmweb.ru/storage/vivino/json/'.$vintage_id.'_'.$wine_id.'.json');
                if($jsonFile){
                    $json = json_decode($jsonFile, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
                }
            } catch (\Exception $exception){}
        }
        $this->json = $json;
    }

    public function highlights(){
        $arr = []; $res = null;
        try {
            foreach ($this->json['info']['highlights'] as $val){$arr[] = $val['highlight_type'];}
            $res = VivinoHighlight::whereIn('type',$arr)->get();
        } catch (\Exception $error) {}

        return $res;
    }

    public function statistics()
    {
        if(isset($this->json['info']['vintage'])){
            return (object)$this->json['info']['vintage']['statistics'];
        } elseif (isset($this->json['info']['wine'])){
            return (object)$this->json['info']['wine']['statistics'];
        } else {
            return null;
        }
    }

    public function expertReviews(){
        try {
            return (object)$this->json['info']['vintage']['expert_reviews'];
        } catch (\Exception $e) {
            return null;
        }
//        if($this->json['info']['vintage']['expert_reviews']){
//
//        } else {
//
//        }
    }

    public function tastes(){
        try {
            return (object) $this->json['tastes']['tastes']['structure'];
        } catch (\Exception $error) {
            return null;
        }
    }

    public function foods(){
        try {
            $arrID = [];
            foreach ($this->json['info']['vintage']['wine']['foods'] as $food){
                $arrID[] = $food['id'];
            }
            return VivinoFood::whereIn('vivino_id',$arrID)->get();
        } catch (\Exception $error) {
            return null;
        }
    }

    public function scoredReview($vintage, $wine){
        try {

            $preview = VivinoReview::with('userData')->where('vintage_id',$vintage)->where('wine_id',$wine)->orderBy('rating','desc')->limit(3)->get();
            $cnt = [
                1 => VivinoReview::where('vintage_id',$vintage)->where('wine_id',$wine)->whereBetween('rating',[0,1])->count(),
                2 => VivinoReview::where('vintage_id',$vintage)->where('wine_id',$wine)->whereBetween('rating',[1,2])->count(),
                3 => VivinoReview::where('vintage_id',$vintage)->where('wine_id',$wine)->whereBetween('rating',[2,3])->count(),
                4 => VivinoReview::where('vintage_id',$vintage)->where('wine_id',$wine)->whereBetween('rating',[3,4])->count(),
                5 => VivinoReview::where('vintage_id',$vintage)->where('wine_id',$wine)->whereBetween('rating',[4,5])->count(),
            ];
        } catch (\Exception $e) { return $e;}

        return view('product.itemReviews',[
            'previews' => $preview,
            'cnt' => $cnt,
            'percent' => array_sum($cnt)/100
        ]);
    }

    public function regionVines(){

    }

    public function itemReviews($vintage,$wine){
        $this->getJson($vintage,$wine);
        $cnt = [];
        $ratings_average = 0;
        $ratings_average_real = 0;

        if(isset($this->json['scoredReview'])){ // ->scoredReview
            $arPreView = [];
//previews
            foreach (end($this->json['scoredReview'])['reviews'] as $review){
                if($reviewItem = VivinoReview::with('userData')->where('vivino_id',$review['id'])->first() ){
                    $arPreView[] = $reviewItem;
                }
                if(count($arPreView) >= 3) {
                    break;
                }
            }
//cnt
            foreach ($this->json['scoredReview'] as $k => $arr){
                $cnt[$k+1] = count($arr['reviews']);
            }
//$ratings_average
            if(isset($this->json['info']['vintage']['statistics']['ratings_average'])){
                $ratings_average = $this->json['info']['vintage']['statistics']['ratings_average'];
            }

            if(isset($this->json['info']['vintage']['ratings_distribution'])){
                $ratings_average_real = $this->json['info']['vintage']['ratings_distribution'];
            }




        } else {
            $arPreView = null;
        }
        return view('product.itemReviews',[
            'previews' => $arPreView,
            'cnt' => $cnt,
            'cntSum' => array_sum($cnt),
            'percent' => 100/array_sum($cnt),
            'ratings_average' => $ratings_average,
            'cnt_real' => $ratings_average_real,
            'percent_real' =>  100/array_sum($ratings_average_real),
            'cntSum_real' => array_sum($ratings_average_real),
            'spelling' => [
                1 => 'звезда',
                2 => 'звезды',
                3 => 'звезды',
                4 => 'звезды',
                5 => 'звезд',
            ]
        ]);
    }

    public function style($json){
        try {
           return VivinoStyle::where('vivino_id',$this->json['info']['vintage']['wine']['style']['id'])->first();
        } catch (\Exception $e) {
            return null;
        }
    }

    public function winery($json){
        try {
            $winery = $json['info']['vintage']['wine']['winery'];
            return VivinoWinery::where('vivino_id',$winery['id'])->first();
        } catch (\Exception $e) {
            return null;
        }
    }


    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function wine($slug){
        $with = ['srcWinestyle','srcVivino','winery','color','country','sugar','region','subRegion','stock','brand','vivino'];
        $product = Product::with($with)->whereSlug($slug)->firstOrFail();
        /*


        $vivino = Vivino::whereProductId($product->id)->first();
        $json = [];





        $payload = [
            'vThumbSrc' => Constant::vThumb,
            'vMiddleSrc' => Constant::vMiddle,
            'vOriginalSrc' => Constant::vOriginal,
            'pThumbSrc' => Constant::pThumb,
            'pMiddleSrc' => Constant::pMiddle,
            'pOriginalSrc' => Constant::pOriginal,
            'flagSrc' => Constant::flagSrc,
            'product' => $product,
            'vivino' => $vivino,
            '$json' => $json,
            'statistics' => $json['info']['vintage'] ?  (object)$json['info']['vintage']['statistics'] : (object)$json['info']['wine']['statistics']
        ];
        */

        $this->getJson($product->vivino->vintage_id,$product->vivino->wine_id);
        $constant = new Constant();

//        dump($this->json);

        \JavaScript::put([
            'itemReviewsLink' => '/item-reviews/'.$product->vivino->vintage_id.'/'.$product->vivino->wine_id
        ]);

        $payload = [
            'product' => $product,
            'stores' => $constant->stores(),
            'grapes' => $product->grapes ? PropGrape::whereIn('id',$product->grapes)->get() : [],
            'json' => $this->json,
            'v_highlights' => $this->highlights(),
            'v_statistics' => $this->statistics(),
            'v_expert_reviews' => $this->expertReviews(),
            'v_tastes' => $this->tastes(),
            'v_foods' => $this->foods(),
            'style' => $this->style($this->json),
            'v_winery' => $this->winery($this->json),
//            'scoredReview' => $this->scoredReview($product->vivino->vintage_id,$product->vivino->wine_id),
        ];

// blurb_ru
// body_description_ru
// description_ru
// varietal_name_ru


        return view('items.wine', $payload);
    }
}
