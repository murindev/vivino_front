<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropType
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType whereUrl($value)
 * @property string|null $img
 * @property string|null $text
 * @property int|null $passed
 * @property int|null $log_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType wherePassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropType whereText($value)
 */
class PropType extends Model
{
    protected $table = 'prop_types';
    protected $fillable = ['name_ru','name_en','url','text','img','passed','log_id'];
}
