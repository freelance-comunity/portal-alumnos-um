<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Alert;

class PermissionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $permissions = Permission::all();

        return view('backEnd.users.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.users.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        try {
          $input = $request->all();
          $input['name'] = str_slug($request->input('name'));
          Permission::create($input);

          Alert::message('Permiso creado exitosamente!')->persistent("Cerrar");

          return redirect('user/permissions');

        } catch (\Exception $e) {
          Alert::error(''.$e->getMessage().'')->persistent("Cerrar");
          return redirect('user/permissions');
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
        $permission = Permission::findOrFail($id);

        return view('backEnd.users.permissions.show', compact('permission'));
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
        $permission = Permission::findOrFail($id);

        return view('backEnd.users.permissions.edit', compact('permission'));
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

        $permission = Permission::findOrFail($id);
        $permission->update($request->all());

        Alert::message('Permiso actualizado exitosamente!')->persistent("Cerrar");

        return redirect('user/permissions');
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
        $permission = Permission::findOrFail($id);

        $permission->delete();

        Alert::success('Permiso eliminado exitosamente!')->persistent("Cerrar");

        return redirect('user/permissions');
    }

}
