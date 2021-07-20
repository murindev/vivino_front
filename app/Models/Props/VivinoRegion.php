<?php


namespace App\Models\Props;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\VivinoRegion
 *
 * @property int $id
 * @property int $vivino_id
 * @property string $native_name
 * @property string $name_en
 * @property string $seo_name
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property string $background
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoRegion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoRegion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoRegion query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoRegion whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoRegion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoRegion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoRegion whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoRegion whereNativeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoRegion whereSeoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoRegion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoRegion whereVivinoId($value)
 * @mixin \Eloquent
 */
class VivinoRegion extends Model
{
    protected $table = 'vivino_regions';
    protected $fillable = ['vivino_id', 'native_name', 'name_en', 'seo_name', 'background'];

}
