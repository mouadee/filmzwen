<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Play;
use App\Film;


class films extends Controller
{
    public function films() {

    	$plays = Play::get();
    	$film = Film::get();
        return view('films', compact('film', 'plays'));
    }
}
