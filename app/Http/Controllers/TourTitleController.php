<?php

namespace App\Http\Controllers;

use App\Models\tourTitle;
use App\Http\Requests\StoretourTitleRequest;
use App\Http\Requests\UpdatetourTitleRequest;

class TourTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = tourTitle::all();

            return $this->create_response(true, 'ok', $data);

        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
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
    public function store(StoretourTitleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tourTitle $tourTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tourTitle $tourTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetourTitleRequest $request, tourTitle $tourTitle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tourTitle $tourTitle)
    {
        //
    }
}
