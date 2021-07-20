<?php


namespace App\Models\Menu;


use Illuminate\Database\Eloquent\Model;

class MenuSub extends Model
{

    protected $table = 'menu_sub';
    protected $guarded = [];

    public function menuort(){
        return $this->hasMany(MenuOrt::class,'menu_sub_id','id');
    }

}
