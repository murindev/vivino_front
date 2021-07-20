<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropSugar
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_en
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSugar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSugar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSugar query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSugar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSugar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSugar whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSugar whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropSugar whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PropSugar extends Model
{
    protected $table = 'prop_sugars';
    protected $fillable = ['name_ru','name_en'];
}
