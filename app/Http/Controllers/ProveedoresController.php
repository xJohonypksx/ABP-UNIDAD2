<?php

namespace App\Http\Controllers;

use App\Models\proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = proveedores::all();
        return view('proveedores.index', compact('proveedores'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(proveedores $proveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proveedores $proveedores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, proveedores $proveedores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(proveedores $proveedores)
    {
        //
    }
}
