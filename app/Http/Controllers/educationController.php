<?php

namespace App\Http\Controllers;

use App\Models\education;
use Illuminate\Http\Request;

class educationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = education::orderBy('id')->get();
        $data2 = education::orderBy('id')->get();
        return view('dashboard.education.index')->with(
            ['data' => $data,
            'data2' => $data2
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'institution'=>$request->institution,
            'date'=>$request->date
        ];
        education::create($data);

        return redirect()->route('education.index')->with('success','Success');
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
        $data = education::where('id', $id)->first();
        $data2 = education::where('id', $id)->first();
        return view('dashboard.education.edit')->with(
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
            'institution' => $request->institution,
            'date' => $request->date
        ];

        education::where('id', $id)->update($data);

        return redirect()->route('education.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        education::where('id', $id)->delete();
        return redirect()->route('education.index')->with('success', 'Success');
    }
}
