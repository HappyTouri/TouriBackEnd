<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Http\Requests\StorecountryRequest;
use App\Http\Requests\UpdatecountryRequest;

//use App\Http\Resources\UserResource;



class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = country::all();

            return $this->create_response(true, 'ok', $data);

        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecountryRequest $request)
    {
        $input = $request->all();
        $data = country::create($input);
        // return response()->json($data, 200, $headers);
        return $this->create_response(true, 'ok', $data, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecountryRequest $request, country $country)
    {
        $data = $request->validated();
        $country->update($data);

        //return response()->json($data);
        return $data;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(country $country)
    {

        dd($country);
        $country->delete();

        return response()->json("deleted", 204);
    }
}
