<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\medicines;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.medicines.index');
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
    public function show(medicines $medicines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(medicines $medicines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, medicines $medicines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(medicines $medicines)
    {
        //
    }
}
