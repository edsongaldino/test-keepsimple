<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Http\Controllers\Controller;
use App\Models\VehicleBrand;
use App\Models\VehicleModel;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::where('user_id', Auth::user()->id)->get();
        $types = VehicleType::all();
        $brands = VehicleBrand::all();
        return view('vehicles.index', compact('vehicles', 'types', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = VehicleType::all();
        $brands = VehicleBrand::all();
        $models = Vehicle::all();
        return view('vehicles.create', compact('types', 'brands', 'models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicle = new Vehicle();
        $vehicle->user_id = Auth::user()->id;
        $vehicle->vehicle_type_id = $request->type;
        $vehicle->vehicle_model_id = $request->model;
        $vehicle->name = $request->name;
        $vehicle->version = $request->version;
        $vehicle->save();

        return Redirect::to('/vehicles')->with('success', 'O veículo foi adicionado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        $types = VehicleType::all();
        $brands = VehicleBrand::all();
        $models = VehicleModel::all();
        return view('vehicles.update', compact('vehicle', 'types', 'brands', 'models'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
    */

    public function update(Request $request)
    {
        $vehicle = Vehicle::findOrFail($request->id);
        $vehicle->vehicle_type_id = $request->type;
        $vehicle->vehicle_model_id = $request->model;
        $vehicle->name = $request->name;
        $vehicle->version = $request->version;
        $vehicle->save();
        
        return Redirect::to('/vehicles')->with('success', 'Dados Atualizados!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $vehicle = Vehicle::find($request->id);

        if($vehicle->delete()):
            return true;
        else:
            $response_array['status'] = 'success';    
            echo json_encode($response_array);
        endif;
    }
}
