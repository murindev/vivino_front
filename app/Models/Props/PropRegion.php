<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropRegion
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property int|null $country_id
 * @property string|null $url
 * @property string|null $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereUrl($value)
 * @mixin \Eloquent
 * @property string|null $img
 * @property int|null $passed
 * @property int|null $log_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion wherePassed($value)
 * @property int|null $vivino_id
 * @property string|null $native_name
 * @property string|null $seo_name
 * @property string|null $background
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereNativeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereSeoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropRegion whereVivinoId($value)
 */
class PropRegion extends Model
{
    protected $table = 'prop_regions';
    protected $fillable = ['name_ru','name_en','img','country_id','url','text','passed','log_id'];
}
