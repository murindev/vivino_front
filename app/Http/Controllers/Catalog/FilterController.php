<?php


namespace App\Http\Controllers\Catalog;


use App\Http\Controllers\Controller;
use App\Models\Props\PropColor;

class FilterController extends Controller
{
    private $colors;

    public function wine(){
        $this->colors = PropColor::where('category_id',1)->get();
        return $this;
    }

}
