<?php

namespace App\Http\Controllers;

use App\Models\transportation;
use App\Http\Requests\StoretransportationRequest;
use App\Http\Requests\UpdatetransportationRequest;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = transportation::get();

            return $this->create_response(true, 'ok', $data);

        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretransportationRequest $request)
    {
        try {
            $input = $request->all();
            $data = transportation::create($input);
            return $this->create_response(true, 'ok', $data);

        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetransportationRequest $request, transportation $transportation)
    {
        // $x = $transportation->first();
        $data = $request->validated();
        $transportation->update($data);

        //return response()->json($data);
        return $transportation;
        //return response()->json($data);
        // return $this->create_response(true, 'ok', $data);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transportation $transportation)
    {



        $data = $transportation->delete();

        dd($data);
        // return $this->create_response(true, 'ok', $data);



    }
}
