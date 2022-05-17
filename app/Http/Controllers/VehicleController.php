<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleRequest;
use App\Models\Vehicle;
use Illuminate\Http\Response;

class VehicleController extends Controller
{
    public function index()
    {
        $lista = Vehicle::orderBy('plate')->get();
        return view(
            'vehicles/index',
            [
                'vehicles' => $lista,
                'title' => 'Lista de Veículos'
            ]
        );
    }

    public function create()
    {
        return view('vehicles/create');
    }

    public function store(StoreVehicleRequest $request)
    {
        Vehicle::create($request->all());
        return redirect()->route('vehicles.index');
    }

    public function show(Vehicle $vehicle)
    {
        return view(
            'vehicles/show',
            [
                'vehicle' => $vehicle,
                'title' => 'Detalhes do Veículos'
            ]
        );
    }

    public function edit($vehicle)
    {
        var_dump(__FUNCTION__);
        var_dump($vehicle);
    }

    public function update()
    {
        var_dump(__FUNCTION__);
    }

    public function destroy()
    {
        var_dump(__FUNCTION__);
    }
}
