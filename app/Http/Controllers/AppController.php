<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\VehicleBrand;
use App\Models\VehicleType;

class AppController extends Controller
{
    public function login(){
        return view('login.index');
    }

    public function register(){
        return view('login.register');
    }

    public function home(){
        $vehicles = Vehicle::all();
        $types = VehicleType::all();
        $brands = VehicleBrand::all();
        return view('home', compact('vehicles', 'types', 'brands'));
    }

    public function vehiclesSearch(Request $resquest){

        $query = Vehicle::orderBy('name', 'ASC');

        if(!empty($resquest->name)) {
            $query = Vehicle::where('name', 'LIKE', '%'.$resquest->name.'%');
        }

        if(!empty($resquest->model)) {
            $query = Vehicle::where('vehicle_model_id', $resquest->model);
        }

        $vehicles = $query->get();
        $types = VehicleType::all();
        $brands = VehicleBrand::all();
        return view('home', compact('vehicles', 'types', 'brands'));
    }

    public function veiculos(){
        return view('veiculos.index');
    }
 
}
