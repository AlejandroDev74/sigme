<?php

namespace App\Http\Controllers;

use App\Models\Logistica;
use Illuminate\Http\Request;

class LogisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function logistica()
    {
        return view('logistica');
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
    public function show(Logistica $logistica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logistica $logistica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logistica $logistica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logistica $logistica)
    {
        //
    }
}
