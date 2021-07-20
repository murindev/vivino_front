<?php


namespace App\Http\Controllers\Index;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Constant;

class IndexController extends Controller
{



    public function uLink(){

    }



    public function index(){
        $constant = new Constant();
        $wineFilter = $constant->filtersWine();

        \JavaScript::put([
            'uLink' => '/wines?filter[color]='.$wineFilter->color[0]->id.'&filter[price]='.$wineFilter->price->from.','.$wineFilter->price->to.'&filter[rating]='.$wineFilter->rating->from.','.$wineFilter->rating->to
        ]);

        return view('index', [
            'stores' => $constant->stores(),
            'filters' => $wineFilter
        ]);
    }
}
