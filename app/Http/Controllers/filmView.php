<?php

namespace App\Http\Controllers;

use App\Film;
use App\Comments;
use App\User;
use Illuminate\Http\Response;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class filmView extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id)
    {
        $film = Film::find($id);
        return view('filmView', compact('film', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $film = Film::find($id);
        $comments = Comments::get();
        $user = User::get();


        return view('filmView',compact('film', 'comments', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
