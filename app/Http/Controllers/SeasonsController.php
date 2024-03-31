<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    public function index(Series $series)     
    {
        // $seasons = Season::query()
        //     ->with("episodes")
        //     ->where("series_id", $series)
        //     ->get();
        // $seasons = $series->seasons; // Acessando colection do eloquent
        // $seasons = $series->seasons(); // Acessando o relacionamento
        $seasons = $series->seasons()->with('episodes')->get(); //EagerLoad
        return view('seasons.index')->with('seasons', $seasons)->with('series', $series);
    }
}
