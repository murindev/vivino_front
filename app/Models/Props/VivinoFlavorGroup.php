<?php


namespace App\Models\Props;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\VivinoFlavorGroup
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $icon
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFlavorGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFlavorGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFlavorGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFlavorGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFlavorGroup whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFlavorGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFlavorGroup whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFlavorGroup whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoFlavorGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class VivinoFlavorGroup extends Model
{
    protected $table = 'vivino_flavor_group';
    protected $fillable = ['name_ru','name_en','icon'];

}
