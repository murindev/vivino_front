<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/',[
    'as' => 'home', 'uses' => '\App\Http\Controllers\Index\IndexController@index'
]);

// catalog

Route::prefix('wine')->group(function () {
    Route::any('/customer', '\App\Http\Vuex\CustomerVuex@index');

});

Route::any('/wines/post', '\App\Http\Controllers\Catalog\CatalogController@post');
Route::any('/wines', [
    'as' => 'wines', 'uses' => '\App\Http\Controllers\Catalog\CatalogController@wines'
]);
Route::any('/search', [
    'as' => 'search', 'uses' => '\App\Http\Controllers\Catalog\SearchController@wines'
]);



Route::get('/item-reviews/{vintage_id}/{wine_id}', [
    'as' => 'wines', 'uses' => '\App\Http\Controllers\Catalog\ItemController@itemReviews'
]);
Route::get('/products/{slug}', [
    'as' => 'wines', 'uses' => '\App\Http\Controllers\Catalog\ItemController@wine'
]);


Route::get('/test', function (){
//    $cards = DB::select("select
//    products.id as products_id,
//    vivino.id as vivino_id,
//    vivino.product_id as  vivino_product_id,
//    vivino.price as vivino_price
//    from `products` inner join `vivino` on `products`.`id` = `vivino`.`product_id` where `products`.`id` = 1723 AND `vivino`.`price` between 20 and 1800 ORDER BY vivino.price ASC");
//
//
//    dump($cards);

    $tt = DB::table('products')
        ->leftJoin('vivino', 'products.id', '=','vivino.product_id')
        ->leftJoin('prop_colors', 'products.color_id', '=','prop_colors.id')
        ->leftJoin('prop_brands', 'products.brand_id', '=','prop_brands.id')
        ->leftJoin('prop_countries', 'products.country_id', '=','prop_countries.id')
        ->leftJoin('prop_regions', 'products.region_id', '=','prop_regions.id')
        ->leftJoin('prop_sub_regions', 'products.sub_region_id', '=','prop_sub_regions.id')
        ->leftJoin('prop_manufacturers', 'products.manufacturer_id', '=','prop_manufacturers.id');
//                ->join('vivino_reviews', 'vivino.id', '=','vivino_reviews.vivino_id')
/*        ->join('files as vFiles', function ($join){
            $join->on('vFiles.product_id', '=', 'products.id')->where('vFiles.from', '=', 'vivino');
        })
        ->join('files as pFiles', function ($join){
            $join->on('pFiles.product_id', '=', 'products.id')->where('pFiles.from', '=', 'winestyle');
        })*/
    $tt->whereBetween('vivino.price',[1000,1500] );
    $tt->where('prop_countries.id','=', 1);
    $tt->select(
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
//            'vivino_reviews.note as review',

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
        ) ;

    $rr = $tt->paginate('12', ['*'], '', 1);

    dump($rr->items());
    dump($rr->total());
});



