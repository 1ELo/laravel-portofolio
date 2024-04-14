<?php

namespace App\Http\Controllers;

use App\Models\otherskill;
use Illuminate\Http\Request;

class otherskillController extends Controller
{
    public function index()
    {
        $data = otherskill::orderBy('id')->get();
        return view('dashboard.otherskill.index')->with('data', $data);//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.otherskill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'field'=>$request->field
        ];
        otherskill::create($data);

        return redirect()->route('otherskill.index')->with('success','Success');
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
        $data = otherskill::where('id', $id)->first();
        return view('dashboard.otherskill.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'field'=>$request->field
        ];
        otherskill::where('id', $id)->update($data);

        return redirect()->route('otherskill.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        otherskill::where('id', $id)->delete();
        return redirect()->route('otherskill.index')->with('success', 'Success');
    }
}
