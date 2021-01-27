<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{

    public function index()
    {
        return Marca::all();
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Marca $marca)
    {
        //
    }


    public function update(Request $request, Marca $marca)
    {
        //
    }


    public function destroy(Marca $marca)
    {
        //
    }
}
