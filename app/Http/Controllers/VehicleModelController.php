<?php

namespace App\Http\Controllers;

use App\Models\VehicleModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleModelController extends Controller
{
    public function getModels($brand){
        $models = VehicleModel::where('vehicle_brand_id','=', $brand)->orderBy('name','asc')->get();
        return view('layouts.selectModels', compact('models'));
    }
}
