<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropColor
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor whereUrl($value)
 * @property string|null $img
 * @property string|null $text
 * @property int|null $passed
 * @property int|null $log_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor wherePassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropColor whereText($value)
 */
class PropColor extends Model
{
    protected $table = 'prop_colors';
    protected $fillable = ['name_ru','name_en','img','url','text','passed','log_id'];
}


