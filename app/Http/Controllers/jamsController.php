<?php

namespace App\Http\Controllers;

use App\Models\jams;
use Illuminate\Http\Request;

class jamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     private function extractSpotifyLink($url)
    {

        preg_match('/open\.spotify\.com\/embed\/track\/([^\/\?]+)/', $url, $matches);

        if (isset($matches[1])) {
            return 'https://open.spotify.com/embed/track/' . $matches[1] . '?utm_source=generator';
        }

        return null;
    }
    public function index()
    {
        $data = jams::orderBy('id')->get();
        $data2 = jams::orderBy('id')->get();
        return view('dashboard.jams.index')->with(
            ['data' => $data,
            'data2' => $data2
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $spotifyLink = $this->extractSpotifyLink($request->link);

    $data = [
        'title' => $request->title,
        'link' => $spotifyLink
    ];

    jams::create($data);

    return redirect()->route('jams.index')->with('success','Success');
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
        $data = jams::where('id', $id)->first();
        $data2 = jams::where('id', $id)->first();
        return view('dashboard.jams.edit')->with(
            ['data' => $data,
            'data2' => $data2
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $spotifyLink = $this->extractSpotifyLink($request->link);

        $data = [
            'title' => $request->title,
            'date' => $request->link
        ];

        jams::where('id', $id)->update($data);

        return redirect()->route('jams.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        jams::where('id', $id)->delete();
        return redirect()->route('jams.index')->with('success', 'Success');
    }
}
