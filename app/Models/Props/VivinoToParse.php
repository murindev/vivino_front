<?php


namespace App\Models\Props;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\VivinoToParse
 *
 * @property int $id
 * @property int|null $vintage_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoToParse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoToParse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoToParse query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoToParse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoToParse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoToParse whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoToParse whereVintageId($value)
 * @mixin \Eloquent
 */
class VivinoToParse extends Model
{
    protected $table = 'vivino_to_parse';

    protected $fillable = ['vintage_id'];

}
