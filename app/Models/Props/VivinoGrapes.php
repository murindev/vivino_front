<?php


namespace App\Models\Props;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\VivinoGrapes
 *
 * @property int $id
 * @property int|null $has_detailed_info
 * @property string|null $name_en
 * @property int|null $vivino_id
 * @property string|null $seo_name
 * @property int|null $wines_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoGrapes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoGrapes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoGrapes query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoGrapes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoGrapes whereHasDetailedInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoGrapes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoGrapes whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoGrapes whereSeoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoGrapes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoGrapes whereVivinoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoGrapes whereWinesCount($value)
 * @mixin \Eloquent
 */
class VivinoGrapes extends Model
{
    protected $table = 'vivino_grapes';
    protected $fillable = ['has_detailed_info','name_en','vivino_id','seo_name','wines_count'];

}




