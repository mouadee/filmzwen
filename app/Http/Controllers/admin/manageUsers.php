<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\DataTables\usersDtatablesDataTable;
use Illuminate\Http\Request;
use App\User;

class manageUsers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(usersDtatablesDataTable $users)
    {
        $title = trans('admin.users_control');
        return $users->render('admin.users',['title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users_create',['title'=>trans('admin.Create_user')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(request(),[

            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'gender' => 'required',
            'country' => 'required',
            'name' => 'sometimes|nullable|min:6',
            'avatar' => 'sometimes|nullable',
            'phone' => 'sometimes|nullable',

        ], [
            'email.unique' => trans('admin.email_has_already_ben_taken'),
            'email.required'  => trans('admin.email_required'),
            'email.email'  => trans('admin.email_verefecation'),
            'username.required'  => trans('admin.username_required'),
            'gender.required'  => trans('admin.gender_required'),
            'country.required'  => trans('admin.country_required'),
            'password.min:6'  => trans('admin.password_muts_be_greater_than_6'),
            'password.required'  => trans('admin.password_required'),
        ]);

        $data['password'] = bcrypt(request('password'));
        User::create($data);
        session()->flash('success', trans('admin.record_added'));
        return redirect(aurl('users'));
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
        $user = User::find($id);
        $title = trans('admin.edit_user');
        return view('admin.edit_user', compact('user', 'title'));
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
        $data = $this->validate(request(),[

            'username' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'sometimes|nullable|min:6',
            'name' => 'sometimes|nullable|min:6',
            'avatar' => 'sometimes|nullable',
            'phone' => 'sometimes|nullable',
            'country' => 'sometimes|nullable',
            'gender' => 'sometimes|nullable',

        ], [
            'email.unique' => trans('admin.email_has_already_ben_taken'),
            'email.required'  => trans('admin.email_required'),
            'email.email'  => trans('admin.email_verefecation'),
            'username.required'  => trans('admin.name_required'),
            'password.min:6'  => trans('admin.password_muts_be_greater_than_6'),
            'password'  => trans('admin.password_required'),
        ], [

            'username' => trans('admin.username'),
            'email' => trans('admin.email'),
            'password' => trans('admin.password'),

        ]);
       if (request()->has('password')) {
        
            $data['password'] = bcrypt(request('password'));
       }
        User::where('id', $id)->update($data);
        session()->flash('success', trans('admin.updated_record'));
        return redirect(aurl('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        session()->flash('success', trans('admin.deleted_record'));
        return redirect(aurl('users'));
    }
}
