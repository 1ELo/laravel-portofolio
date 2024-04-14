<?php

namespace App\Http\Controllers;

use App\Models\sosials;
use Illuminate\Http\Request;

class sosialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = sosials::orderBy('id')->get();
        $data2 = sosials::orderBy('id')->get();
        $data3 = sosials::orderBy('id')->get();
        return view('dashboard.sosials.index')->with(
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
        return view('dashboard.sosials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'username'=>$request->username,
            'link' =>$request->link,
            'img'=>$request->img
        ];
        sosials::create($data);

        return redirect()->route('sosials.index')->with('success','Success');
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
        $data = sosials::where('id', $id)->first();
        $data2 = sosials::where('id', $id)->first();
        $data3 = sosials::where('id', $id)->first();
        return view('dashboard.sosials.edit')->with(
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
            'username' => $request->username,
            'link' => $request->link,
            'img' => $request->img
        ];

        sosials::where('id', $id)->update($data);

        return redirect()->route('sosials.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        sosials::where('id', $id)->delete();
        return redirect()->route('sosials.index')->with('success', 'Success');
    }
}
