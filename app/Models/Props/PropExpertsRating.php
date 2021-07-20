<?php

namespace App\Models\Props;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\PropExpertsRating
 *
 * @property int $id
 * @property string $product_id
 * @property string|null $name
 * @property float|null $rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropExpertsRating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropExpertsRating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropExpertsRating query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropExpertsRating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropExpertsRating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropExpertsRating whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropExpertsRating whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropExpertsRating whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\PropExpertsRating whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PropExpertsRating extends Model
{
    protected $table = 'prop_experts_ratings';
    protected $fillable = ['product_id','name','rating'];
}
