<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropGrapes
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $img
 * @property string|null $url
 * @property string|null $text
 * @property int|null $passed
 * @property int|null $log_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape wherePassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereUrl($value)
 * @property int|null $has_detailed_info
 * @property int|null $vivino_id
 * @property string|null $seo_name
 * @property int|null $wines_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereHasDetailedInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereSeoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereVivinoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropGrape whereWinesCount($value)
 */
class PropGrape extends Model
{
    protected $table = 'prop_grapes';
    protected $fillable = ['name_ru','name_en','img','url','text','passed','log_id'];

}
