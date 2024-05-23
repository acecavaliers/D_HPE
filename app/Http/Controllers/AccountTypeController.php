<?php

namespace App\Http\Controllers;

use App\Models\AccountType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AccountTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Accounts/AccountMain');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $arr = $request->formdata;
        $arr['created_by'] = Auth::user()->name;
        $query = AccountType::create($arr);

        return 'success';
    }


    public function show(AccountType $accountType)
    {
        //
    }


    public function edit(AccountType $accountType)
    {
        //
    }


    public function update(Request $request, AccountType $accountType)
    {
        //
    }


    public function destroy(AccountType $accountType)
    {
        //
    }

    public function getlist(Request $request){

        // $query = AccountType::where('is_active',1)->get();
        $query = AccountType::orderBy('id', 'desc')->paginate(10);

        return $query;


    }
}
