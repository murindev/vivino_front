<?php

namespace App\Models\Donors;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Donors\DonorProduct
 *
 * @property int $id
 * @property int|null $product_id
 * @property int|null $category_id
 * @property int|null $donor_id
 * @property string|null $code
 * @property string|null $articul
 * @property int|null $stock
 * @property string|null $url
 * @property string|null $price
 * @property string|null $price_discount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct whereArticul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct whereDonorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct wherePriceDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorProduct whereUrl($value)
 * @mixin \Eloquent
 */
class DonorProduct extends Model
{
    protected $table = 'donor_products';
    protected $fillable = ['product_id','category_id','donor_id','code','articul','stock','url','price','price_discount'];
}










