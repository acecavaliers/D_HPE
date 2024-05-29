<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Controllers\Controller;
use App\Models\PatientAllergy;
use App\Models\PatientCurrAndMaintnceMedication;
use App\Models\PatientFamHistory;
use App\Models\PatientMedIllnessPrevHosptlznSurgery;
use App\Models\PatientPastIllness;
use App\Models\PatientPersonalSocialHistory;
use App\Models\PatientVacinationHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $pc = $request->pcdata;
        $pd = $request->pddata;
        $pe = $request->pedata;
        $pf = $request->pfdata;
        $ph = $request->phdata;

        $arr['created_by'] = Auth::user()->name;

        DB::beginTransaction();

        try {
            // Create the patient
            $patient = Patient::create($arr);

            // Check if patient creation was successful
            if ($patient) {
                // Create past illnesses
                foreach ($pa as $illness) {
                    $illness['patient_id'] = $patient->id;
                    PatientPastIllness::create($illness);
                }

                // Create medical illness and previous hospitalization/surgery
                if (isset($pb['med_illness']) || isset($pb['hospt_surgery'])) {
                    PatientMedIllnessPrevHosptlznSurgery::create([
                        'patient_id' => $patient->id,
                        'med_illness' => $pb['med_illness'],
                        'hospt_surgery' => $pb['hospt_surgery'],
                    ]);
                }
                //Insert  Patient Curr And Maintnce Medication
                if (isset($pc['name'])) {
                    $pc['patient_id'] = $patient->id;
                    $pc['created_by'] = $patient->created_by;
                    PatientCurrAndMaintnceMedication::create($pc);
                }
                //Insert  Patient Allergies
                if (isset($pd['food_details']) || isset($pd['drugs_details']) || isset($pd['other_details'])
                || isset($pd['is_food']) || isset($pd['is_drugs']) || isset($pd['is_other'])
                ) {
                    $pd['patient_id'] = $patient->id;
                    $pd['created_by'] = $patient->created_by;
                    PatientAllergy::create($pd);

                }
                //Insert  Patient Social History
                if (isset($pe['[is_caffeine]']) || isset($pe['caffeine_details']) || isset($pe['is_tobacco'])
                || isset($pe['tobacco_pack_per_day']) || isset($pe['tobacco_year']) || isset($pe['is_alcohol'])
                || isset($pe['alcohol_last_use']) || isset($pe['is_illegal_drugs']) || isset($pe['illegal_drugs_type'])
                || isset($pe['illegal_drugs_last_use'])
                ) {
                    $pe['patient_id'] = $patient->id;
                    $pe['created_by'] = $patient->created_by;
                    PatientPersonalSocialHistory::create($pe);

                }


                // Patient fam history
                foreach ($pf as $fh) {
                    $fh['patient_id'] = $patient->id;
                    $fh['created_by'] = $patient->created_by;
                    PatientFamHistory::create($fh);
                }

                // Patient Vaccine
                foreach ($ph as $vac) {
                    $vac['patient_id'] = $patient->id;
                    PatientVacinationHistory::create($vac);
                }
            }

            // Commit the transaction if everything is successful
            DB::commit();

            return response()->json(['message' => 'Success'], 200);
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::rollBack();

            return response()->json(['message' => 'Error occurred', 'error' => $e->getMessage()], 500);
        }
    }
    // public function store(Request $request)
    // {
    //     $arr = $request->formdata;
    //     $pa = $request->padata;
    //     $pb = $request->pbdata;


    //     $arr['created_by'] = Auth::user()->name;
    //     $patient= Patient::create($arr);

    //     if ($patient) {
    //         foreach ($pa as $illness) {
    //             $illness['patient_id'] = $patient->id;
    //             // return  $illness;
    //             // Create the Illness
    //             PatientPastIllness::create($illness);

    //         }
    //     }

    //     if (isset($pb['med_illness']) || isset($pb['hospt_surgery'])) {

    //         PatientMedIllnessPrevHosptlznSurgery::create([
    //             'patient_id' => $patient->id,
    //             'med_illness' => $pb['med_illness'],
    //             'hospt_surgery' => $pb['hospt_surgery'],

    //         ]);
    //     }

    //     return 'success';
    // }

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
