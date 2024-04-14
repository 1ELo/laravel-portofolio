<?php

namespace App\Http\Controllers;

use App\Models\experience;
use Illuminate\Http\Request;

class experienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = experience::orderBy('id')->get();
        $data2 = experience::orderBy('id')->get();
        $data3 = experience::orderBy('id')->get();
        return view('dashboard.experience.index')->with(
            ['data' => $data,
            'data2' => $data2,
            'data3' => $data3
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = [
            'institution'=>$request->institution,
            'role' =>$request->role,
            'date'=>$request->date
        ];
        experience::create($data);

        return redirect()->route('experience.index')->with('success','Success');
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
        $data = experience::where('id', $id)->first();
        $data2 = experience::where('id', $id)->first();
        $data3 = experience::where('id', $id)->first();
        return view('dashboard.experience.edit')->with(
            ['data' => $data,
            'data2' => $data2,
            'data3' => $data3
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'institution' => $request->institution,
            'role' => $request->role,
            'date' => $request->date
        ];

        experience::where('id', $id)->update($data);

        return redirect()->route('experience.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        experience::where('id', $id)->delete();
        return redirect()->route('experience.index')->with('success', 'Success');
    }
}
