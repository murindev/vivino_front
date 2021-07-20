<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropPairing
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $title
 * @property string|null $ico
 * @property string|null $img
 * @property string|null $url
 * @property string|null $text
 * @property int|null $passed
 * @property int|null $log_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing whereIco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing wherePassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropPairing whereUrl($value)
 */
class PropPairing extends Model
{
    protected $table = 'prop_pairings';
    protected $fillable = ['name_ru','name_en','title','ico','img','url','text','passed','log_id'];
}
