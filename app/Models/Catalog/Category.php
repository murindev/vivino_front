<?php

namespace App\Models\Catalog;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Catalog\Category
 *
 * @property int $id
 * @property string $slug
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Category findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Category whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Category whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Catalog\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name_ru'
            ]
        ];
    }


}
