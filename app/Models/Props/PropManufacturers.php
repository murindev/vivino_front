<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropManufacturers
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $site
 * @property string|null $text_product
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereSite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $img
 * @property int|null $country_id
 * @property int|null $region_id
 * @property int|null $sub_region_id
 * @property string|null $url
 * @property string|null $text
 * @property int|null $passed
 * @property int|null $log_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers wherePassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereSubRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereTextProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereUrl($value)
 * @property int|null $vivino_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropManufacturers whereVivinoId($value)
 */
class PropManufacturers extends Model
{
    protected $table = 'prop_manufacturers';
    protected $fillable = ['name','img','site','country_id','region_id','sub_region_id','url','text','text_product','passed','log_id'];
}
