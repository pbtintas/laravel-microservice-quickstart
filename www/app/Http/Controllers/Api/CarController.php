<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
//        return Car::all();
        return Car::orderBy('id', 'DESC')->get();
//        return Car::paginate(5); // com paginação
//        return Car::paginate(null,['marca','modelo','ano']);
    }

    public function store(Request $request)
    {
        return Car::create($request->all());
    }

    public function show(Car $car)
    {
        return $car;
    }


    public function update(Request $request, Car $car)
    {
        $this->validate($request, $this->rules);
        $car->update($request->all());
        return $car;
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return response()->noContent();
    }
}
