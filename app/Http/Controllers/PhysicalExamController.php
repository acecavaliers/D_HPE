<?php

namespace App\Http\Controllers;

use App\Models\PhysicalExam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class PhysicalExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('PhysicalExam/PEMain');
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
        $query = PhysicalExam::create($arr);

        return 'success';
    }

    /**
     * Display the specified resource.
     */
    public function show(PhysicalExam $physicalExam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhysicalExam $physicalExam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PhysicalExam $physicalExam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhysicalExam $physicalExam)
    {
        //
    }
    public function getlist(Request $request){
        // $query = AccountType::where('is_active',1)->get();
        $query = PhysicalExam::orderBy('id', 'desc')->paginate(10);
        return $query;

    }

    public function getAll(Request $request){
        // $query = AccountType::where('is_active',1)->get();
        $query = PhysicalExam::orderBy('id', 'asc')->get();
        return $query;

    }
}
