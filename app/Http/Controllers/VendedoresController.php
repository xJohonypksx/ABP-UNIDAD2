<?php

namespace App\Http\Controllers;

use App\Models\vendedores;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendedores = vendedores::all();
        return view('vendedores.index', compact('vendedores'));
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
    public function show(vendedores $vendedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vendedores $vendedores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vendedores $vendedores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vendedores $vendedores)
    {
        //
    }
}
