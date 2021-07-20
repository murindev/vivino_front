<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropSubRegion
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_en
 * @property int $region_id
 * @property string|null $url
 * @property string|null $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion whereUrl($value)
 * @mixin \Eloquent
 * @property string|null $img
 * @property int|null $country_id
 * @property int|null $passed
 * @property int|null $log_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSubRegion wherePassed($value)
 */
class PropSubRegion extends Model
{
    protected $table = 'prop_sub_regions';
    protected $fillable = ['name_ru','name_en','img','country_id','region_id','url','text','passed','log_id'];
}
