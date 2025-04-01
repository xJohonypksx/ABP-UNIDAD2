<?php

namespace App\Http\Controllers;

use App\Models\personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = personas::all();

        return view("personas.index", compact("personas"));//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "hola desde create";//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       return "hola desde store"; //
    }

    /**
     * Display the specified resource.
     */
    public function show(personas $personas)
    {
        return "hola desde show";//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(personas $personas)
    {
        return"hola desde edit";//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, personas $personas)
    {
        return"hola desde update";//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(personas $personas)
    {
        return"hola desde destroy";//
    }
}
