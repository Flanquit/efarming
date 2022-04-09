<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Farmer;
use App\Models\FarmerProducts;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class FarmerProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create(Request $request)
    {
        //
        $farmerId = $request->farmerId;
        $products = FarmerProducts::all();
        $categories = Category::all();

        return view('farmers.addFarmerProducts')->with([
            'farmerId' => $farmerId,
            'products' => $products,
            'categories' => $categories,
            'product' => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  FarmerProducts  $farmerProducts
     * @return Response
     */
    public function show(FarmerProducts $farmerProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  FarmerProducts  $farmerProducts
     * @return Response
     */
    public function edit(FarmerProducts $farmerProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  FarmerProducts  $farmerProducts
     * @return Response
     */
    public function update(Request $request, FarmerProducts $farmerProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  FarmerProducts  $farmerProducts
     * @return Response
     */
    public function destroy(FarmerProducts $farmerProducts)
    {
        //
    }
}
