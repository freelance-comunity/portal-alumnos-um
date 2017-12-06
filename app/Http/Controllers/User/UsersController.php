<?php

namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Alert;
use Hash;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return view('backEnd.users.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $roles = Role::pluck('name','id');
        return view('backEnd.users.users.create')
        ->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        try {
          $this->validate($request, ['name' => 'required|string|max:255', 'last_name' => 'required|string|max:255', 'second_lastname' => 'required|string|max:255', 'username' => 'required|string|max:20', 'email' => 'required|string|email|max:255|unique:users', 'password' => 'required|string|min:6|confirmed']);

          $role = Role::findOrFail($request->input('user_type'));

          $input = $request->all();
          $input['password'] = Hash::make($request->input('password'));
          $input['user_type'] = $role->name;
          $user = User::create($input);

          // Asignación del rol
          $user->assignRole($role);

          Alert::message('Usuario creado exitosamente!')->persistent("Cerrar");

          return redirect('user/users');
        } catch (\Exception $e) {
          Alert::error(''.$e->getMessage().'')->persistent("Cerrar");

          return redirect('user/users');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('backEnd.users.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('backEnd.users.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required|string|max:255', 'last_name' => 'required|string|max:255', 'second_lastname' => 'required|string|max:255', 'username' => 'required|string|max:20', 'email' => 'required|string|email|max:255',]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        Alert::message('Usuario actualizado!')->persistent("Cerrar");;

        return redirect('user/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        Alert::success('Usuario eliminado!')->persistent("Cerrar");


        return redirect('user/users');
    }

}
