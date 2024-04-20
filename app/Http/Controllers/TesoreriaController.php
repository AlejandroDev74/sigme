<?php

namespace App\Http\Controllers;

use App\Models\Tesoreria;
use Illuminate\Http\Request;

class TesoreriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tesoreria()
    {
        return view('tesoreria');
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
    public function show(Tesoreria $tesoreria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tesoreria $tesoreria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tesoreria $tesoreria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tesoreria $tesoreria)
    {
        //
    }
}
