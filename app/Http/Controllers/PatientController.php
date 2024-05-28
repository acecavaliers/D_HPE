<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Controllers\Controller;
use App\Models\PatientMedIllnessPrevHosptlznSurgery;
use App\Models\PatientPastIllness;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Patient/PatientMain');
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
        $pa = $request->padata;
        $pb = $request->pbdata;


        $arr['created_by'] = Auth::user()->name;
        $patient= Patient::create($arr);

        if ($patient) {
            foreach ($pa as $illness) {
                $illness['patient_id'] = $patient->id;
                // return  $illness;
                // Create the Illness
                PatientPastIllness::create($illness);

            }
        }

        if (isset($pb['med_illness']) || isset($pb['hospt_surgery'])) {

            PatientMedIllnessPrevHosptlznSurgery::create([
                'patient_id' => $patient->id,
                'med_illness' => $pb['med_illness'],
                'hospt_surgery' => $pb['hospt_surgery'],

            ]);
        }

        return 'success';
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }

    public function getlist(Request $request){

        // $query = AccountType::where('is_active',1)->get();
        $query = Patient::orderBy('id', 'desc')->paginate(10);

        return $query;


    }
}
