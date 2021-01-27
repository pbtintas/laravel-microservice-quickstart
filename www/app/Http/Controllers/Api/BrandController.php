<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

    class BrandController extends Controller
{

    public function index()
    {
        return Brand::paginate();
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Brand $brand)
    {
        return $brand;
    }


    public function update(Request $request, Brand $brand)
    {
        //
    }


    public function destroy(Brand $brand)
    {
        //
    }
}
