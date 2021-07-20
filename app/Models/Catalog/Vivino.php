<?php


namespace App\Models\Catalog;


use App\Models\Props\VivinoReview;
use App\Models\Props\VivinoUser;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Catalog\Vivino
 *
 * @property int $id
 * @property int|null $product_id
 * @property int $product_code
 * @property int|null $vintage_id
 * @property int|null $wine_id
 * @property string|null $info
 * @property int|null $tastes
 * @property int|null $tastesReview
 * @property int|null $scoredReview
 * @property int|null $image
 * @property string|null $json_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereJsonPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereProductCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereScoredReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereTastes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereTastesReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereVintageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereWineId($value)
 * @mixin \Eloquent
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Vivino whereName($value)
 */
class Vivino extends Model
{
    protected $table = 'vivino';
    protected $fillable = [
        'product_id',
        'product_code',
        'vintage_id',
        'wine_id',
        'info',
        'tastes',
        'tastesReview',
        'scoredReview',
        'image',
        'json_path',
    ];

    public function products(){
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function user(){
        return $this->hasOne(VivinoUser::class,'vivino_id','review_user_id');
    }
    public function itemReview(){
        return $this->hasOne(VivinoReview::class,'id','review_id');
    }

    public function scopePriceBetween($query,$arg){
        return $query->whereBetween('price', $arg);
    }
}
