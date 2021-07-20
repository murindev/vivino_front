<?php


namespace App\Models\Props;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Props\VivinoStyle
 *
 * @property int $id
 * @property int|null $vivino_id
 * @property int|null $acidity
 * @property string|null $acidity_description
 * @property string|null $background
 * @property string|null $blurb
 * @property int|null $body
 * @property string|null $body_description
 * @property int|null $country
 * @property string|null $description
 * @property string|null $image
 * @property string|null $interesting_facts
 * @property int|null $name_en
 * @property int|null $name_ru
 * @property int|null $region
 * @property string|null $regional_name
 * @property string|null $seo_name
 * @property string|null $varietal_name
 * @property int|null $wine_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereAcidity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereAcidityDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereBlurb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereBodyDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereInterestingFacts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereRegionalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereSeoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereVarietalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereVivinoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Props\VivinoStyle whereWineTypeId($value)
 * @mixin \Eloquent
 */
class VivinoStyle extends Model
{
    protected $table = 'vivino_style';
    protected $fillable = [
        'vivino_id',
        'acidity',
        'acidity_description',
        'background',
        'blurb',
        'body',
        'body_description',
        'country',
        'description',
        'image',
        'interesting_facts',
        'name_en',
        'name_ru',
        'region',
        'regional_name',
        'seo_name',
        'varietal_name',
        'wine_type_id',
    ];
}



