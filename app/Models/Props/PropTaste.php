<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropTaste
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $title
 * @property string|null $ico
 * @property string|null $img
 * @property string|null $url
 * @property string|null $text
 * @property int|null $passed
 * @property int|null $log_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste whereIco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste wherePassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropTaste whereUrl($value)
 */
class PropTaste extends Model
{
    protected $table = 'prop_tastes';
    protected $fillable = ['name_ru','name_en','title','ico','img','url','text','passed','log_id'];
}





