<?php

namespace App\Http\Controllers;

use DB;
use App\Models\jams;
use App\Models\status;
use App\Models\sosials;
use App\Models\interest;
use App\Models\curStatus;
use App\Models\education;
use App\Models\background;
use App\Models\experience;
use App\Models\otherskill;
use Illuminate\Http\Request;

class portofolioController extends Controller
{
    public function index(){
        $status = status::where('id', 1)->first();
        $currentStatus = curStatus::where('id', 1)->first();
        $background = background::where('id', 1)->first();
        $educations = education::all();
        $experiences = experience::all();
        $sosial = sosials::all();
        $jam = jams::all();
        $interest = interest::all();
        $otherskill = otherskill::all();
        return view('home', [
             'status' => $status,
             'currentStatus' => $currentStatus,
             'background' => $background,
             'educations' => $educations,
             'experiences' => $experiences,
             'sosial' => $sosial,
             'jam' => $jam,
             'interest' => $interest,
             'otherskill' => $otherskill
            ]);
    }
}
