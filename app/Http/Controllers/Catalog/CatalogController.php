<?php


namespace App\Http\Controllers\Catalog;


use App\Http\Controllers\Constant;
use App\Http\Controllers\Controller;
use App\Models\Catalog\Product;
use App\Models\Catalog\Vivino;
use App\Models\Props\PropColor;
use App\Models\Props\PropCountry;
use App\Models\Props\PropGrape;
use App\Models\Props\PropPairing;
use App\Models\Props\PropRegion;
use App\Models\Props\PropSugar;
use App\Models\Props\PropType;
use Composer\DependencyResolver\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use JavaScript;
class CatalogController extends Controller
{

    public function post(){
        return call_user_func_array([__CLASS__,\request()->get('func')],[\request()->all()]);
    }

    public function filterCountry(){
        if(\request()->get('q')){
           $res = PropCountry::where('name_ru','like', '%'.\request()->get('q').'%')->limit(9)->get();
        } else {
            $res = PropCountry::limit(9)->get();
        }
        return view('filters.country', ['list' => $res, 'name' => 'country_id']);
    }

    public function filtersWine(){
        $wine_filters = [];
        // Цвет
        $wine_filters['colors'] = PropColor::where('category_id',1)->get();
    // страна
        $wine_filters['countries'] =  PropCountry::limit(9)->get();
    // Регион
        $wine_filters['regions'] = PropRegion::limit(9)->get();
    // Сахар
        $wine_filters['sugar'] = PropType::limit(9)->get();
    // Виноград
        $wine_filters['grapes'] = PropGrape::where('is_default', 1)->get();
    // Бренд
    // Производитель
    // Объем
    // Рейтинг
    // Цена
    // Объем
    // Сочетание
        $wine_filters['pairings'] = PropPairing::limit(9)->get();
    // Потенциал хранения
    // Крепость
    // Урожай
        return $wine_filters;
    }

    public function initPrice(){
        return [
            'title' => '',
            'sign' => '₽',
            'min' => 3000,
            'max' => 8000,
            'step' => 100,
        ];
    }



    public function productWine(){

        $data = \DB::table('products')





            ->join('vivino', 'products.code', '=', 'vivino.product_code')
//            ->rightJoin('files', 'products.id', '=', 'files.product_id')
//            ->join('files as vFiles', function ($join){
//                $join->on('vFiles.product_id', '=', 'products.id')->where('vFiles.from', '=', 'vivino');
//            })
//            ->join('files as pFiles', function ($join){
//                $join->on('pFiles.product_id', '=', 'products.id')->where('pFiles.from', '=', 'winestyle');
//            })
            ->join('prop_brands', 'products.brand_id', '=', 'prop_brands.id')
            ->join('prop_countries', 'products.country_id', '=', 'prop_countries.id')
            ->join('prop_regions', 'products.region_id', '=', 'prop_regions.id')
//            ->join('vivino_reviews','vivino_reviews.wine_id','=','vivino.wine_id')->max('vivino_reviews.rating')

            ->limit(20)
            ->where('vivino.id', '>', 5)
            ->where('products.country_id','=', 1)
            ->whereIn('products.sugar_id',[] )
            ->select(
/*                \DB::raw("(SELECT name FROM files
                                WHERE files.product_id = products.id
                                GROUP BY products.id) as product_files"),*/
                'vivino.product_code',
                'products.id as p_id',
                'vivino.id as v_id',
//                'files.name as filename',
//                'vFiles.name as v_filename',
//                'files.name',
//                'pFiles.name as p_filename',
                'product_code as code',
                'products.slug',
                'products.name as p_name',
                'products.translit',
                'vivino.vintage_id',
                'vivino.wine_id',
                'prop_brands.id as brand_id',
                'prop_brands.name as brand_name',
                'prop_brands.url as brand_url',
                'prop_countries.id as country_id',
                'prop_countries.name_ru as country_name_ru',
                'prop_countries.name_en as country_name_en',
                'prop_countries.url as country_url',
                'prop_regions.id as region_id',
                'prop_regions.name_ru as region_name_ru',
                'prop_regions.name_en as region_name_en',
                'prop_regions.url as region_url'

            )
            ->get()->keyBy('p_id');

        return $data;
    }




    public function wines(){

        $constant = new Constant();

        $product = \DB::table('products')
            ->leftJoin('vivino', 'products.id', '=','vivino.product_id')
            ->leftJoin('prop_colors', 'products.color_id', '=','prop_colors.id')
            ->leftJoin('prop_brands', 'products.brand_id', '=','prop_brands.id')
            ->leftJoin('prop_countries', 'products.country_id', '=','prop_countries.id')
            ->leftJoin('prop_regions', 'products.region_id', '=','prop_regions.id')
            ->leftJoin('prop_sub_regions', 'products.sub_region_id', '=','prop_sub_regions.id')
            ->leftJoin('prop_manufacturers', 'products.manufacturer_id', '=','prop_manufacturers.id')
            ->leftJoin('vivino_reviews', 'vivino.review_id', '=','vivino_reviews.id')
            ->leftJoin('vivino_users', 'vivino.review_user_id', '=','vivino_users.vivino_id')
//            ->leftJoin('files', 'products.id', '=','files.product_id')->first()
//            ->leftJoin('files as vFiles', function ($join){
//                $join->on('products.id', '=', 'vFiles.product_id')->where('vFiles.from', '=', 'vivino');
//            })
        ;


        if(array_key_exists('filter',\request()->all())){
            $filter = \request()->get('filter');

//            dump($filter['color']);
            if (array_key_exists('price',$filter)){
                $f = explode(',',$filter['price']);
                if($f[1] >= 12500){
                    $f[1] = 9999999999999;
                }
                $product->whereBetween('vivino.price', $f );
            }
            if (array_key_exists('rating',$filter)){
                $product->whereBetween('vivino.ratings_average', explode(',',$filter['rating']) );
            }
            if (array_key_exists('country',$filter)){
                $product->whereIn('prop_countries.id',explode(',',$filter['country']));
            }
            if (array_key_exists('color',$filter)){
                $product->whereIn('prop_colors.id',explode(',',$filter['color']));
            }


//            dump($product->toSql());
        }

        $product->select(
            'products.id as product_id',
            'products.slug as product_slug',
            'products.name as product_name',
            'products.translit as product_translit',

            'vivino.id as vivino_id',
            'vivino.price as price',
            'vivino.ratings_average as ratings_average',
            'vivino.ratings_count as ratings_count',
            'vivino.reviews_count as reviews_count',
            'vivino.review_id as review_id',
            'vivino.review_user_id as review_user_id',

            'vivino_reviews.note as review_note',
            'vivino_reviews.note_ru as review_note_ru',
            'vivino_reviews.rating as review_rating',

            'vivino_users.alias as alias',
            'vivino_users.avatar as avatar',

            'prop_colors.name_ru as color_name_ru',
            'prop_colors.url as color_url',

            'prop_brands.name as brand_name',
            'prop_brands.url as brand_url',

            'prop_countries.id as country_id',
            'prop_countries.name_ru as country_name_ru',
            'prop_countries.name_en as country_name_en',
            'prop_countries.url as country_url',

            'prop_regions.id as region_id',
            'prop_regions.name_ru as region_name_ru',
            'prop_regions.name_en as region_name_en',
            'prop_regions.url as region_url',

            'prop_sub_regions.id as sub_region_id',
            'prop_sub_regions.name_ru as sub_region_name_ru',
            'prop_sub_regions.name_en as sub_region_name_en',
            'prop_sub_regions.url as sub_region_url',

            'prop_manufacturers.id as winery_id',
            'prop_manufacturers.name as winery_name',
            'prop_manufacturers.url as winery_url'

//            'vFiles.name as srcVivino',
//            'pFiles.name as srcWinestyle'

//            'prop_regions.url as region_url' prop_manufacturers
        );



        $catalog = $product->paginate('12', ['*'], '', request()->get('page') ? $page = request()->get('page') : $page = 1);


        $res = [
            'filtersSettings' => $constant->filters(),
            'stores' => $constant->stores(),
            'vThumb' => Constant::vThumb,
            'pThumb' => Constant::pThumb,
            'flagSrc' => Constant::flagSrc,
            'sort_order' => $constant->sort(),
            'filters' => $constant->filtersWine(),
            'init_price' => $this->initPrice(),
            'catalog' => $catalog->items(),
            'total' => number_format ( $catalog->total() ,  0 , "" ," " ),
        ];

        if(request()->get('type') == 'ajax'){
            return view('components.catalogItems',[
                'catalog' => $catalog->items(),
                'total' => number_format ( $catalog->total() ,  0 , "" ," " )
            ]);
        }
        return view('catalog', $res);
    }
}
