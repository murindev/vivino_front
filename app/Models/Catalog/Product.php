<?php

namespace App\Models\Catalog;

use App\Models\Props\PropBrand;
use App\Models\Props\PropColor;
use App\Models\Props\PropCountry;
use App\Models\Props\PropExpertsRating;
use App\Models\Props\PropManufacturers;
use App\Models\Props\PropRegion;
use App\Models\Props\PropStock;
use App\Models\Props\PropSubRegion;
use App\Models\Props\PropSugar;
use App\Models\Props\PropType;
use App\Models\System\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;


/**
 * App\Models\Catalog\Product
 *
 * @property int $id
 * @property string|null $slug
 * @property string|null $name
 * @property string|null $translit
 * @property string|null $articul
 * @property string|null $code
 * @property string|null $picture
 * @property string|null $picture_small
 * @property int|null $category_id
 * @property int|null $type_id
 * @property int|null $color_id
 * @property int|null $sugar_id
 * @property int|null $country_id
 * @property int|null $region_id
 * @property int|null $sub_region_id
 * @property int|null $manufacturer_id
 * @property int|null $stock_id
 * @property int|null $brand_id
 * @property string|null $grapes
 * @property string|null $pairings
 * @property string|null $tastes
 * @property string|null $grape_percentage
 * @property string|null $strength
 * @property string|null $volume
 * @property string|null $volume_type
 * @property string|null $notes_color
 * @property string|null $notes_taste
 * @property string|null $notes_aroma
 * @property string|null $notes_pairing
 * @property string|null $color_depth
 * @property string|null $richness
 * @property string|null $serving_temperature
 * @property string|null $storage_capacity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereArticul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereColorDepth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereGrapePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereGrapes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereNotesAroma($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereNotesColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereNotesPairing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereNotesTaste($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product wherePairings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product wherePictureSmall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereRichness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereServingTemperature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereStockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereStorageCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereStrength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereSubRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereSugarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereTastes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereTranslit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereVolume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereVolumeType($value)
 * @mixin \Eloquent
 * @property int $status
 * @property string|null $facts
 * @property string|null $winestyle_link
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereFacts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Product whereWinestyleLink($value)
 */
class Product extends Model
{
    protected $fillable = [
        'slug','name','translit','articul','code','picture','picture_small','category_id','type_id','color_id','sugar_id','country_id','region_id','sub_region_id','manufacturer_id','stock_id','brand_id','grapes','pairings','tastes','grape_percentage','strength','volume','volume_type','notes_color','notes_taste','notes_aroma','notes_pairing','color_depth','richness','serving_temperature','storage_capacity'.'facts','winestyle_link','status'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getGrapesAttribute($value)
    {
        return explode(',', $value);
    }

    public function setGrapesAttribute($value)
    {
        $this->attributes['grapes'] = implode(',', $value);
    }


    public function setPairingsAttribute($pairings)
    {
        $this->attributes['pairings'] = implode(',', $pairings);
    }


    public function getTastesAttribute($tastes)
    {
        return explode(',', $tastes);
    }

    public function setTastesAttribute($tastes)
    {
        $this->attributes['tastes'] = implode(',', $tastes);
    }

    public function srcWinestyle(){
        return $this->hasOne(File::class,'product_id','id')->where('from','winestyle');
    }
    public function srcVivino(){
        return $this->hasOne(File::class,'product_id','id')->where('from','vivino');
    }
    public function vivino(){
        return $this->hasOne(Vivino::class,'product_id','id');
    }
//    // type_id
//    public function type(){
//        return $this->hasOne(PropType::class,'id','type_id');
//    }
    //color_id
    public function color(){
        return $this->hasOne(PropColor::class,'id','color_id');
    }
    //sugar_id
    public function sugar(){
        return $this->hasOne(PropType::class,'id','sugar_id');
    }
    //country_id
    public function country(){
        return $this->hasOne(PropCountry::class,'id','country_id');
    }
    //region_id
    public function region(){
        return $this->hasOne(PropRegion::class,'id','region_id');
    }
    //sub_region_id
    public function subRegion(){
        return $this->hasOne(PropSubRegion::class,'id','sub_region_id');
    }
    //manufacturer_id
    public function winery(){
        return $this->hasOne(PropManufacturers::class,'id','manufacturer_id');
    }
    //stock_id
    public function stock(){
        return $this->hasOne(PropStock::class,'id','stock_id');
    }
    //brand_id
    public function brand(){
        return $this->hasOne(PropBrand::class,'id','brand_id');
    }
    public function ratingVivino(){
        return $this->hasOne(PropExpertsRating::class,'product_id','id')->where('name','Vivino');
    }

    public function scopePriceBetween($query, $prices)
    {
//        dump($prices);
        return $query->whereBetween('vivino.price', [20,600]);
    }

//    public function food(){
//        return
//    }




}



/*

status
slug
name
translit
articul
code
picture
picture_small
category_id








                 winery


grapes
pairings
tastes
grape_percentage
strength
volume
volume_type
notes_color
notes_taste
notes_aroma
notes_pairing
color_depth
richness
serving_temperature
storage_capacity
facts
winestyle_link
created_at
updated_at*/












