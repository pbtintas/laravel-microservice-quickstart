<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Montadora;
use Illuminate\Http\Request;

class MontadoraController extends Controller
{
    public $rules = [
        'name' => 'required|max:195',
        'abr' => 'required|max:195'];

    public function index()
    {
        return Montadora::orderBy('id', 'DESC')->get();
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        return Montadora::create($request->all());
    }


    public function show(Montadora $montadora)
    {
        return $montadora;
    }


    public function update(Request $request, Montadora $montadora)
    {
        $this->validate($request, $this->rules);
        $montadora->update($request->all());
        return $montadora;
    }


    public function destroy(Montadora $montadora)
    {
        $montadora->delete();
        return response()->noContent();
    }
}
