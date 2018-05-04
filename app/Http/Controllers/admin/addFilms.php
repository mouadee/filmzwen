<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Input as Input;
use App\Film;

class addFilms extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = new Film;
        $Film_language =  [null=>'إختر',"العربية"=>'العربية',"إنجليزية"=>'إنجليزية'];
        return view('admin/addFilms', compact('film', 'Film_language'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $film = new Film;
            $film->Youtube_url          = $request->Youtube_url;
            $film->Film_title           = $request->Film_title;
            $film->Film_Description     = $request->Film_Description;
            $film->Film_Actor           = $request->Film_Actor;
            $film->Film_Hero            = $request->Film_Hero;
            $film->Film_times           = $request->Film_times;
            $film->Film_feedback        = $request->Film_feedback;
            $film->Film_quality         = $request->Film_quality;
            $film->Film_download        = $request->Film_download;
            $film->Film_link            = $request->Film_link;
            $film->Film_productionYears = $request->Film_productionYears;
            $film->Film_types           = $request->Film_types;
            $film->Film_language        = $request->Film_language;
            $Film_poster                = request()->file('Film_poster')->store('public/users');
            $film->Film_poster          = \Storage::disk('local')->url($Film_poster);            
            $film->save();
            session()->flash('success', trans('admin.record_added'));
            return redirect(aurl('admin'));
            //return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
