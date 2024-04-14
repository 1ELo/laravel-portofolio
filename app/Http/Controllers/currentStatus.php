<?php

namespace App\Http\Controllers;


use App\Models\curStatus;
use Illuminate\Http\Request;

class currentStatus extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = curStatus::orderBy('description')->get();
        return view('dashboard.currentStatus.index')->with('data', $data);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = curStatus::where('id', $id)->first();
        return view('dashboard.currentStatus.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'description'=>$request->description
        ];
        curStatus::where('id', $id)->update($data);

        return redirect()->route('status.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
