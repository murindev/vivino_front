<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropCountries
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_en
 * @property string $flag
 * @property string|null $url
 * @property string|null $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereUrl($value)
 * @mixin \Eloquent
 * @property string|null $img
 * @property int|null $passed
 * @property int|null $log_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry wherePassed($value)
 * @property string|null $code
 * @property string|null $native_name
 * @property int|null $regions_count
 * @property string|null $seo_name
 * @property int|null $users_count
 * @property int|null $wineries_count
 * @property int|null $wines_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereNativeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereRegionsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereSeoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereUsersCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereWineriesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropCountry whereWinesCount($value)
 */
class PropCountry extends Model
{
    protected $table = 'prop_countries';
    protected $fillable = ['name_ru','name_en','img','flag','url','text','passed','log_id'];
}
