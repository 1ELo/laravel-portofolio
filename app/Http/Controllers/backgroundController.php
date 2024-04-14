<?php

namespace App\Http\Controllers;

use App\Models\background;
use Illuminate\Http\Request;

class backgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = background::orderBy('id')->get();
        $data2 = background::orderBy('id')->get();
        return view('dashboard.background.index')->with(
            ['data' => $data,
            'data2' => $data2
            ]);
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
        $data = background::where('id', $id)->first();
        $data2 = background::where('id', $id)->first();
        return view('dashboard.background.edit')->with(
            ['data' => $data,
            'data2' => $data2
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'first_paragraf' => $request->first_paragraf,
            'second_paragraf' => $request->second_paragraf
        ];

        background::where('id', $id)->update($data);

        return redirect()->route('background.index')->with('success', 'Success');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
