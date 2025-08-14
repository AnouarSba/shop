<?php
/**
 * Region.php
 *
 * 
 * @created    2022-07-21 16:55:16
 * @modified   2022-07-21 16:55:16
 */

namespace Beike\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Base
{
    protected $fillable = ['name', 'description'];

    public function zones(): BelongsToMany
    {
        return $this->belongsToMany(Zone::class, 'region_zones');
    }

    public function regionZones(): HasMany
    {
        return $this->hasMany(RegionZone::class);
    }
}
