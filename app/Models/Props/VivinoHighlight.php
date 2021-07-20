<?php


namespace App\Models\Props;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\VivinoHighlight
 *
 * @property int $id
 * @property string|null $type
 * @property string|null $icon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoHighlight newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoHighlight newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoHighlight query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoHighlight whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoHighlight whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoHighlight whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoHighlight whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoHighlight whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class VivinoHighlight extends Model
{
    protected $table = 'vivino_highlights';
    protected $fillable = ['type','icon'];

}
