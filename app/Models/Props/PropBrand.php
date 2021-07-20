<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropBrand
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $site
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand whereSite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $img
 * @property int|null $country_id
 * @property int|null $region_id
 * @property int|null $sub_region_id
 * @property string|null $url
 * @property string|null $text
 * @property int|null $passed
 * @property int|null $log_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand wherePassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand whereSubRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropBrand whereUrl($value)
 */
class PropBrand extends Model
{
    protected $table = 'prop_brands';
    protected $fillable = ['name','img','site','country_id','region_id','sub_region_id','url','text','passed','log_id'];
}
