<?php


namespace App\Models\Menu;


use Illuminate\Database\Eloquent\Model;

class MenuTop extends Model
{

    protected $table = 'menu_top';
    protected $guarded = [];
//id	name	link	icon	menu_top_id	created_at	updated_at

    public function submenu(){
        return $this->hasMany(MenuSub::class,'menu_top_id','id');
    }

}
