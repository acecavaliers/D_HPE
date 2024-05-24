<?php

namespace App\Http\Controllers;

use App\Models\IllnessGroup;
use App\Http\Controllers\Controller;
use App\Models\Illness;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class IllnessGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Illnesses/IllnessMain');
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
        // Extract the form data from the request
        $formData = $request->formdata;

        // Add the created_by field to the form data
        $formData['created_by'] = Auth::user()->name;

        // Create the IllnessGroup
        $illnessGroup = IllnessGroup::create($formData);

        // Check if the IllnessGroup was created successfully
        if ($illnessGroup) {
            // Iterate through each symptom and create the Illness
            foreach ($formData['symptoms'] as $symptom) {
                // Add the necessary fields to the symptom data
                $symptom['created_by'] = Auth::user()->name;
                $symptom['illness_group_id'] = $illnessGroup->id;

                // Create the Illness
                Illness::create($symptom);
            }

            // Return success response
            return response()->json(['message' => 'success'], 200);
        }

        // Return error response if IllnessGroup creation failed
        return response()->json(['message' => 'error'], 500);

    }

    /**
     * Display the specified resource.
     */
    public function show(IllnessGroup $illnessGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IllnessGroup $illnessGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IllnessGroup $illnessGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IllnessGroup $illnessGroup)
    {
        //
    }

    public function getlist(Request $request){

        // $query = AccountType::where('is_active',1)->get();
        $query = IllnessGroup::orderBy('id', 'desc')->paginate(10);

        return $query;


    }

    public function getlistChild(Request $request){

        // $query = AccountType::where('is_active',1)->get();
        // $query = Illness::with('illness_groups')->orderBy('id', 'desc')->paginate(10);
        $query = Illness::where('illness_group_id', $request->search)->get();

        return $query;


    }
}
