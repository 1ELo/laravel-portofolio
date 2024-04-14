<?php

namespace App\Http\Controllers;

use App\Models\interest;
use Illuminate\Http\Request;

class interestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = interest::orderBy('id')->get();
        return view('dashboard.interest.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.interest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'field'=>$request->field
        ];
        interest::create($data);

        return redirect()->route('interest.index')->with('success','Success');
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
        $data = interest::where('id', $id)->first();
        return view('dashboard.interest.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'field'=>$request->field
        ];
        interest::where('id', $id)->update($data);

        return redirect()->route('interest.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        interest::where('id', $id)->delete();
        return redirect()->route('interest.index')->with('success', 'Success');
    }
}
