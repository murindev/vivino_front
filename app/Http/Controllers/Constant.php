<?php


namespace App\Http\Controllers;


use App\Models\Catalog\Vivino;
use App\Models\Props\PropColor;
use App\Models\Props\PropCountry;
use App\Models\Props\PropGrape;
use App\Models\Props\PropPairing;
use App\Models\Props\PropRegion;
use App\Models\Props\PropSugar;
use App\Models\Props\PropType;

class Constant
{

    const vThumb = 'http://api.winebaza.ru/storage/uploads/v/thumb/';
    const pThumb = 'http://api.winebaza.ru/storage/uploads/product/thumb/';
    const vMiddle = 'http://api.winebaza.ru/storage/uploads/v/middle/';
    const pMiddle = 'http://api.winebaza.ru/storage/uploads/product/middle/';
    const vOriginal = 'http://api.winebaza.ru/storage/uploads/v/orig/';
    const pOriginal = 'http://api.winebaza.ru/storage/uploads/product/orig/';
    const flagSrc = 'http://api.winebaza.ru/storage/props/flags/';
    const jsonPath = 'http://api.winebaza.ru/storage/vivino/json/';
    const storage = "http://api.winebaza.ru/storage/";

    public function stores(){
        return [
            (object)[ 'img' => 'atak.png','discount'=> 'до 60%','d'=>'25','offer'=>'предложений'],
            (object)[ 'img' => 'ashan.png','discount'=> 'Спец.скидки','d'=>'635','offer'=>'предложений'],
            (object)[ 'img' => 'billa.png','discount'=> 'до 60%','d'=>'8','offer'=>'предложений'],
            (object)[ 'img' => '5ka.png','discount'=> 'Спец.скидки','d'=>'12','offer'=>'предложений'],
            (object)[ 'img' => 'victoria.png','discount'=> 'до 60%','d'=>'258','offer'=>'предложений '],
            (object)[ 'img' => 'redwhite.png','discount'=> 'Спец.скидки','d'=>'43','offer'=>'предложения'],
            (object)[ 'img' => 'probka.png','discount'=> 'до 60%','d'=>'712 ','offer'=>'предложений'],
        ];
    }

    public function filtersWine(){

/*        // Цвет
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
        // Урожай*/
        return (object)[
            'color' => PropColor::all()->sortBy('sort'),
            'sugar' => PropType::all()->sortBy('sort'),
            'countries' => PropCountry::limit(9)->orderBy('sort')->get(),
            'price' => (object)['min' => 0, 'max' => 12500,'from' => 1000, 'to' => 5000, 'step' => 100],
            'rating'=> (object)['min' => 0, 'max' => 5, 'from' => 3.5, 'to' => 5, 'step' => 0.5],
        ];
    }


    public function filters(){
//        $colors = PropColor::all();
        return (object)[
            'color' => PropColor::all()->sortBy('sort')
        ];

    }
    public function sort(){
        return [
            (object)['id' => 1, 'name' => 'По рейтингу'],
            (object)['id' => 2, 'name' => 'По популярности'],
        ];
    }
}
