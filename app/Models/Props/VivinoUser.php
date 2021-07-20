<?php


namespace App\Models\Props;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\VivinoUser
 *
 * @property int $id
 * @property int|null $vivino_id
 * @property string|null $seo_name
 * @property string|null $alias
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoUser whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoUser whereSeoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoUser whereVivinoId($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoUser whereAvatar($value)
 */
class VivinoUser extends Model
{
    protected $table = 'vivino_users';
    protected $fillable = ['vivino_id','seo_name','alias','avatar'];
}
