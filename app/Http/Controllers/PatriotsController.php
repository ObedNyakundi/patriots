<?php

namespace App\Http\Controllers;

use Intervention\Image\Laravel\Facades\Image; //image magic facade
use App\Models\Patriots;
use Illuminate\Http\Request;

class PatriotsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //display a form to add details of the patriot
        return view('people.patriots.create');
    }

    /**
     * Store a newly created patriot pending administrator approval.
     */
    public function store(Request $request)
    {
        dd('I am storing the data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patriots $patriots)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patriots $patriots)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patriots $patriots)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patriots $patriots)
    {
        //
    }
}
