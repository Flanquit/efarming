<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Farmer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
        $farmers = Farmer::all();

        return view('farmers.index')->with([
            'farmers' => $farmers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        //
        return view('farmers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'location' => 'string',
            'product' => 'required'
        ]);

        $request['status'] = 1;

        DB::table('farmers')->insert([
           "name" => $request->name,
           "email" => $request->email,
           "phone" => $request->phone,
           "location" => $request->location,
           "status" => 1,
           "product" => $request->product,
        ]);

        return redirect()->route('farmers')
            ->with('success','Farmer Saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  Farmer  $farmer
     * @return Response
     */
    public function show(Farmer $farmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Farmer  $farmer
     * @return Response
     */
    public function edit(Farmer $farmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Farmer  $farmer
     * @return Response
     */
    public function update(Request $request, Farmer $farmer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Farmer  $farmer
     * @return Response
     */
    public function destroy(Farmer $farmer)
    {
        //
    }
}
