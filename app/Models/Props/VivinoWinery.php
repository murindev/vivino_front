<?php


namespace App\Models\Props;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\VivinoWinery
 *
 * @property int $id
 * @property string|null $address
 * @property string|null $background
 * @property string|null $background_sub
 * @property string|null $business_name
 * @property string|null $description
 * @property string|null $email
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $twitter
 * @property string|null $website
 * @property int|null $vivino_id
 * @property string|null $name_en
 * @property string|null $phone
 * @property string|null $seo_name
 * @property string|null $statistics
 * @property string|null $wine_maker
 * @property string|null $winemaker
 * @property string|null $winery_group
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereBackgroundSub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereBusinessName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereSeoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereStatistics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereVivinoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereWineMaker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoWinery whereWineryGroup($value)
 * @mixin \Eloquent
 */
class VivinoWinery extends Model
{
    protected $table = 'vivino_wineries';
    protected $fillable = [
        'address',
        'background',
        'background_sub',
        'business_name',
        'description',
        'email',
        'facebook',
        'instagram',
        'twitter',
        'website',
        'vivino_id',
        'name_en',
        'phone',
        'seo_name',
        'statistics',
        'wine_maker',
        'winemaker',
        'winery_group',
    ];

    public function  getStatisticsAttribute($value){
        return json_decode($value);
    }

}
