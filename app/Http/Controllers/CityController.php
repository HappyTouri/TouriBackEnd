<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Http\Requests\StorecityRequest;
use App\Http\Requests\UpdatecityRequest;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_by_country($id)
    {
        $data = city::where('country_id', $id)->get();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecityRequest $request)
    {
        $input = $request->all();
        $data = city::create ($input);
        return response()->json([$data],210);

        
    }

    /**
     * Display the specified resource.
     */
    public function show(city $city)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(city $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecityRequest $request, city $city)
    {
        $data = $request->validated();
        $city->update($data);

        return response()->json([$data],210);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(city $city)
    {
        $city->delete();

        return response("", 204);
    }
}
