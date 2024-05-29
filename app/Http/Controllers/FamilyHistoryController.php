<?php

namespace App\Http\Controllers;

use App\Models\FamilyHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class FamilyHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('FamilyHistory/FHMain');
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
        $query = FamilyHistory::create($arr);

        return 'success';
    }

    /**
     * Display the specified resource.
     */
    public function show(FamilyHistory $familyHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FamilyHistory $familyHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FamilyHistory $familyHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FamilyHistory $familyHistory)
    {
        //
    }

    public function getlist(Request $request){

        // $query = AccountType::where('is_active',1)->get();
        $query = FamilyHistory::orderBy('id', 'desc')->paginate(10);

        return $query;


    }
}
