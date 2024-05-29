<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class VaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Vaccine/VaccineMain');
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
        $arr = $request->formdata;
        $arr['created_by'] = Auth::user()->name;
        $query = Vaccination::create($arr);

        return 'success';
    }

    /**
     * Display the specified resource.
     */
    public function show(Vaccination $vaccination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vaccination $vaccination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vaccination $vaccination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vaccination $vaccination)
    {
        //
    }

    public function getlist(Request $request){

        // $query = AccountType::where('is_active',1)->get();
        $query = Vaccination::orderBy('id', 'desc')->paginate(10);

        return $query;


    }

    public function getlistAdd(Request $request){

        // $query = AccountType::where('is_active',1)->get();
        $query = Vaccination::orderBy('id', 'asc')->get();
        return $query;


    }
}
