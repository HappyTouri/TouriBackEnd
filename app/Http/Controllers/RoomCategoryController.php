<?php

namespace App\Http\Controllers;

use App\Models\roomCategory;
use App\Http\Requests\StoreroomCategoryRequest;
use App\Http\Requests\UpdateroomCategoryRequest;

class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = roomCategory::all();

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
    public function store(StoreroomCategoryRequest $request)
    {
        $input = $request->all();
        $data = roomCategory::create($input);
        // return response()->json($data, 200, $headers);
        return $this->create_response(true, 'ok', $data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(roomCategory $roomCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(roomCategory $roomCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateroomCategoryRequest $request, roomCategory $roomCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(roomCategory $roomCategory)
    {

        dd($roomCategory);
        $roomCategory->delete();

        return response()->json("deleted", 204);
    }
}
