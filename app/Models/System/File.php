<?php


namespace App\Models\System;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\System\File
 *
 * @property int $id
 * @property int $product_id
 * @property string|null $name
 * @property string|null $type
 * @property string|null $from
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\File query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\File whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\File whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\File whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\File whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\File whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\File whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\File whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class File extends Model
{
    protected $fillable = ['product_id','name','type','from'];

}


