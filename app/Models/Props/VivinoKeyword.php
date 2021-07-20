<?php


namespace App\Models\Props;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\VivinoKeyword
 *
 * @property int $id
 * @property int|null $group_id
 * @property int|null $vivino_id
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoKeyword newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoKeyword newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoKeyword query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoKeyword whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoKeyword whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoKeyword whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoKeyword whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoKeyword whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoKeyword whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoKeyword whereVivinoId($value)
 * @mixin \Eloquent
 */
class VivinoKeyword extends Model
{
    protected $table = 'vivino_keywords';
    protected $fillable = ['group_id','vivino_id','name_ru','name_en'];
}



