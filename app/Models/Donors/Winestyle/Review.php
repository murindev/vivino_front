<?php


namespace App\Models\Donors\Winestyle;


use App\Models\Catalog\Product;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Donors\Winestyle\Review
 *
 * @property int $id
 * @property int|null $product_id
 * @property string|null $name
 * @property string|null $date
 * @property string|null $rate
 * @property string|null $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Winestyle\Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Winestyle\Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Winestyle\Review query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Winestyle\Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Winestyle\Review whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Winestyle\Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Winestyle\Review whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Winestyle\Review whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Winestyle\Review whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Winestyle\Review whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Winestyle\Review whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Review extends Model
{
    protected $table = 'winestyle_reviews';
    protected $fillable = ['product_id','name','date','rate','text'];

    public function product(){
        $this->belongsTo(Product::class,'product_id');
    }
}




