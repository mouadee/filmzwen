<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\DataTables\adminDatatable;
use Illuminate\Http\Request;
use App\Admin;

class ADminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(adminDatatable $admin)
    {
        $title = trans('admin.admins_control');
        return $admin->render('admin.admins.index',['title'=> $title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create',['title'=>trans('admin.Create_new_admin')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = $this->validate(request(),[

            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',

        ], [
            'email.unique' => trans('admin.email_has_already_ben_taken'),
            'email.required'  => trans('admin.email_required'),
            'email.email'  => trans('admin.email_verefecation'),
            'name.required'  => trans('admin.name_required'),
            'password.min:6'  => trans('admin.password_muts_be_greater_than_6'),
        ], [

            'name' => trans('admin.name'),
            'email' => trans('admin.email'),
            'password' => trans('admin.password'),

        ]);

        $data['password'] = bcrypt(request('password'));
        Admin::create($data);
        session()->flash('success', trans('admin.record_added'));
        return redirect(aurl('admin'));
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
        $admin = Admin::find($id);
        $title = trans('admin.edit_admin');
        return view('admin.admins.edit', compact('admin', 'title'));
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

            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $id,
            'password' => 'sometimes|nullable|min:6',

        ], [
            'email.unique' => trans('admin.email_has_already_ben_taken'),
            'email.required'  => trans('admin.email_required'),
            'email.email'  => trans('admin.email_verefecation'),
            'name.required'  => trans('admin.name_required'),
            'password.min:6'  => trans('admin.password_muts_be_greater_than_6'),
        ], [

            'name' => trans('admin.name'),
            'email' => trans('admin.email'),
            'password' => trans('admin.password'),

        ]);
       if (request()->has('password')) {
        
            $data['password'] = bcrypt(request('password'));
       }
        Admin::where('id', $id)->update($data);
        session()->flash('success', trans('admin.updated_record'));
        return redirect(aurl('admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::find($id)->delete();
        session()->flash('success', trans('admin.deleted_record'));
        return redirect(aurl('admin'));
    }
}
