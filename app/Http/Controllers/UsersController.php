<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
USE App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderBy('id', 'ASC')->paginate(5);
          //dd($users->all());
        return  view('admin.users.index')->with('users', $users);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //dd('Hola este es un mensaje');
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd('EXITO');
        //dd($request->all());
      //  dd($request);
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash('Usuario Registrado');
        return redirect()->route('admin.users.index');
        //dd('Usuario Creado');

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
      $user = User::find($id);
      return view('admin.users.edit')->with('user', $user);

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
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
       //Flash::error('El usuario '. $user->name . 'ha sido borrado de forma exitosa!');
      flash('El usuario '. $user->name . ' ha sido borrado de forma exitosa!', 'danger');

      //$request->session()->flash('danger', 'El usuario '. $user->name . 'ha sido borrado de forma exitosa!');

      //\Session::flash('flash_message','Usuario Eliminado!.');
      return redirect()->route('admin.users.index');
    }
}
