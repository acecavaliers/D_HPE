<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Controllers\Controller;
use App\Models\PatientAllergy;
use App\Models\PatientAssesmentRecommendation;
use App\Models\PatientCurrAndMaintnceMedication;
use App\Models\PatientFamHistory;
use App\Models\PatientMedIllnessPrevHosptlznSurgery;
use App\Models\PatientObGyneHistory;
use App\Models\PatientPastIllness;
use App\Models\PatientPersonalSocialHistory;
use App\Models\PatientPhysicalExam;
use App\Models\PatientPpdSkinTest;
use App\Models\PatientPresentIllness;
use App\Models\PatientVacinationHistory;
use App\Models\PatientVisualHearinSpeech;
use App\Models\PatientVitalSignsPainScale;
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
        $pg = $request->pgdata;
        $ph = $request->phdata;
        $pi = $request->pidata;
        $pj = $request->pjdata;

        $p2a = $request->p2adata;
        $p2b = $request->p2bdata;
        $p2c = $request->p2cdata;

        $p3 = $request->p3data;

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

                // patient Ob-gyne
                if (isset($pg['gyne_surgery']) || isset($pg['is_pregnant']) || isset($pg['g']) || isset($pg['p'])
                || isset($pg['age_of_gestation']) || isset($pg['expected_delivery']) || isset($pg['last_menstrual_period']) || isset($pg['prev_menstrual_period'])
                || isset($pg['age_of_menarche']) || isset($pg['age_of_menopausal']) || isset($pg['is_birth_control']) || isset($pg['bc_type'])
                || isset($pg['pap_smear']) || isset($pg['mammography']) || isset($pg['is_dysmenorrhea']) || isset($pg['is_viginal_discharge'])
                || isset($pg['is_pain_viginal_sex']) || isset($pg['is_vaginal_lesions_mass_warts'])

                ) {

                    $pg['patient_id'] = $patient->id;
                    $pg['created_by'] = $patient->created_by;
                    PatientObGyneHistory::create($pg);
                }


                // Patient Vaccine
                foreach ($ph as $vac) {
                    $vac['patient_id'] = $patient->id;
                    PatientVacinationHistory::create($vac);
                }

                // patient pressent illness
                if (isset($pi['details'])) {
                    PatientPresentIllness::create([
                        'patient_id' => $patient->id,
                        'details' => $pi['details'],
                    ]);
                }

                // patient pain scale
                if (isset($pj['height']) || isset($pj['weight'])
                || isset($pj['bmi']) || isset($pj['sthenic']) || isset($pj['asthenic']) || isset($pj['hypersthenic'])
                || isset($pj['blood_pressure']) || isset($pj['pulse_rate']) || isset($pj['respiration_rate']) || isset($pj['Temperature'])
                || isset($pj['pain'])
                ) {

                    $pj['patient_id'] = $patient->id;
                    $pj['created_by'] = $patient->created_by;
                    PatientVitalSignsPainScale::create($pj);
                }

                // patient visual hearing speech
                if (isset($p2a['uncorrected_fv_od20']) || isset($p2a['uncorrected_fv_os20']) || isset($p2a['uncorrected_nv_odj']) || isset($p2a['uncorrected_nv_osj'])
                || isset($p2a['corrected_fv_od20']) || isset($p2a['corrected_fv_os20']) || isset($p2a['corrected_nv_odj']) || isset($p2a['corrected_nv_osj'])
                || isset($p2a['ishihara']) || isset($p2a['speech']) || isset($p2a['ad_hearing']) || isset($p2a['as_hearing'])
                ) {

                    $p2a['patient_id'] = $patient->id;
                    PatientVisualHearinSpeech::create($p2a);
                }

                // patient physical exam
                foreach ($p2b as $pex) {
                    $pex['patient_id'] = $patient->id;
                    $pex['created_by'] = $patient->created_by;
                    PatientPhysicalExam::create($pex);
                }

                // patient ppd test
                if (isset($p2c['is_applied']) || isset($p2c['fst_ppd_datetime_administered']) || isset($p2c['fst_ppd_administered_by']) || isset($p2c['fst_ppd_result'])
                || isset($p2c['fst_ppd_interpreted_by']) || isset($p2c['snd_ppd_datetime_administered']) || isset($p2c['snd_ppd_administered_by'])
                || isset($p2c['snd_ppd_result']) || isset($p2c['snd_ppd_interpreted_by'])
                ) {

                    $p2c['patient_id'] = $patient->id;
                    PatientPpdSkinTest::create($p2c);
                }

                // patient assesment_recommendations
                if (isset($p3['assessment']) || isset($p3['recommendation']) || isset($p3['physician']) || isset($p3['exam_date_time'])

                ) {
                    $p3['patient_id'] = $patient->id;
                    $p3['created_by'] = $patient->created_by;
                    PatientAssesmentRecommendation::create($p3);
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
