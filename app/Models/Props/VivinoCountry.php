<?php


namespace App\Models\Props;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\VivinoCountry
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $name_en
 * @property string|null $native_name
 * @property int|null $regions_count
 * @property string|null $seo_name
 * @property int|null $users_count
 * @property int|null $wineries_count
 * @property int|null $wines_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry whereNativeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry whereRegionsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry whereSeoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry whereUsersCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry whereWineriesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoCountry whereWinesCount($value)
 * @mixin \Eloquent
 */
class VivinoCountry extends Model
{
    protected $table = 'vivino_countries';
    protected $fillable = ['code', 'name_en', 'native_name', 'regions_count', 'seo_name', 'users_count', 'wineries_count', 'wines_count'];
}
