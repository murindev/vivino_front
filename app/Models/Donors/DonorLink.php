<?php

namespace App\Models\Donors;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Donors\DonorLink
 *
 * @property int $id
 * @property int $donor_id
 * @property string $name
 * @property string $link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorLink whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorLink whereDonorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorLink whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorLink whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorLink whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Donors\DonorLink whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DonorLink extends Model
{
    protected $table = 'donor_links';
}
