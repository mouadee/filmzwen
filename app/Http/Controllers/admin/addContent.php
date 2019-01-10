<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
//use App\DataTables\adminDatatable;
use Illuminate\Http\Request;
use \Input as Input;
use App\Play;


class addContent extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $play = Play::all();
        $Film_language =  ["عربية"=>'عربية',"إنجليزية"=>'إنجليزية'];
        return view('admin/add',compact('Film_add', 'play','Film_language'));
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
        // ------- Store Data -------

            $play = new Play;
            $play->Youtube_url          = $request->Youtube_url;
            $play->Film_title           = $request->Film_title;
            $play->Film_Description     = $request->Film_Description;
            $play->Film_Actor           = $request->Film_Actor;
            $play->Film_Hero            = $request->Film_Hero;
            $play->Film_times           = $request->Film_times;
            $play->Film_feedback        = $request->Film_feedback;
            $play->Film_quality         = $request->Film_quality;
            $play->Film_download        = $request->Film_download;
            $play->Film_link            = $request->Film_link;
            $play->Film_season          = $request->Film_season;
            $play->Film_ring            = $request->Film_ring;
            $play->Film_productionYears = $request->Film_productionYears;
            $play->Film_types           = $request->Film_types;
            $Film_poster                = request()->file('Film_poster')->store('app/public/users');
            $play->Film_poster          = \Storage::disk('local')->url($Film_poster);            
            $play->save();
            return redirect()->back();

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
