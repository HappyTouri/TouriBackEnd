<?php

namespace App\Http\Controllers;

use App\Models\tourStatus;
use App\Http\Requests\StoretourStatusRequest;
use App\Http\Requests\UpdatetourStatusRequest;

class TourStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoretourStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tourStatus $tourStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tourStatus $tourStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetourStatusRequest $request, tourStatus $tourStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tourStatus $tourStatus)
    {
        //
    }
}
