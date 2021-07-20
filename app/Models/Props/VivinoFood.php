<?php


namespace App\Models\Props;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\VivinoFood
 *
 * @property int $id
 * @property int|null $vivino_id
 * @property string|null $name_en
 * @property string|null $name_ru
 * @property string|null $seo_name
 * @property string|null $image
 * @property int|null $background
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFood newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFood newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFood query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFood whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFood whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFood whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFood whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFood whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFood whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFood whereSeoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFood whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFood whereVivinoId($value)
 * @mixin \Eloquent
 */
class VivinoFood extends Model
{
    protected $table = 'vivino_foods';
    protected $fillable = ['vivino_id','name_en','name_ru','seo_name','image','background'];

}
