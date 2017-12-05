<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Campus;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Alert;
use Hash;

class CampusesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $campuses = Campus::all();

        return view('backEnd.admin.campuses.index', compact('campuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.campuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['campus_id' => 'required', 'name' => 'required', 'corporate_name' => 'required', 'rfc' => 'required', 'address' => 'required', 'number_outside' => 'required', 'number_inside' => 'required', 'reference' => 'required', 'postal_code' => 'required', 'colony' => 'required', 'federal_entity' => 'required', 'country' => 'required', 'campus_key' => 'required', 'status' => 'required', ]);

        Campus::create($request->all());

        Alert::message('Campus creado exitosamente!')->persistent("Cerrar");

        return redirect('admin/campuses');
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
        $campus = Campus::findOrFail($id);

        return view('backEnd.admin.campuses.show', compact('campus'));
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
        $campus = Campus::findOrFail($id);

        return view('backEnd.admin.campuses.edit', compact('campus'));
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
        $this->validate($request, ['campus_id' => 'required', 'name' => 'required', 'corporate_name' => 'required', 'rfc' => 'required', 'address' => 'required', 'number_outside' => 'required', 'number_inside' => 'required', 'reference' => 'required', 'postal_code' => 'required', 'colony' => 'required', 'federal_entity' => 'required', 'country' => 'required', 'campus_key' => 'required', 'status' => 'required', ]);

        $campus = Campus::findOrFail($id);
        $campus->update($request->all());

        Alert::message('Campus actualizado exitosamente!')->persistent("Cerrar");

        return redirect('admin/campuses');
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
        $campus = Campus::findOrFail($id);

        $campus->delete();

        Alert::success('Campus eliminado exitosamente!')->persistent("Cerrar");

        return redirect('admin/campuses');
    }

}
