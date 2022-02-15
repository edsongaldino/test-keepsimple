<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->hasOne(VehicleBrand::class, 'id', 'vehicle_brand_id');
    }
}
