<?php

namespace App\Models\Donors;

use App\Helpers\Traits\HasManyKeyBy;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Donors\Donor
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Donor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Donor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Donor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Donor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Donor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Donor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Donor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\Donor whereUrl($value)
 * @mixin \Eloquent
 */
class Donor extends Model
{
    use HasManyKeyBy;
    public function links(){
        return $this->hasManyKeyBy('id',DonorLink::class);
    }
}
