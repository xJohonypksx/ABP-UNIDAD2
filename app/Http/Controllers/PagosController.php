<?php

namespace App\Http\Controllers;

use App\Models\pagos;
use Illuminate\Http\Request;

class PagosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagos = pagos::all();
        return view('pagos.index', compact('pagos'));
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
    public function show(pagos $pagos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pagos $pagos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pagos $pagos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pagos $pagos)
    {
        //
    }
}
