<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropStock
 *
 * @property int $id
 * @property string $name
 * @property int $code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropStock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropStock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropStock query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropStock whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropStock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropStock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropStock whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropStock whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PropStock extends Model
{
    protected $table = 'prop_stocks';
    protected $fillable = ['name','code'];
}
