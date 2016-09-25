<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

/**
 * @param Class $CompanyController [create the initial working company]
 * @return void
 */
class CompanyController extends Controller
{
    /**
     * Add inserted companies to the database initially
     * @param  Request
     * @return [company view]
     * Adds the user logged in as the creator of the company
     */
    public function db_addcompany(Request $request) {
    	// DONE Make a validation ya hizo entries
        $Company = New Company;
        $Company->company_name = $request->cname;
        $Company->company_initials = $request->cinitials;
        $Company->company_address = $request->caddress;
        $Company->company_location = $request->clocation;
        $Company->created_by = Auth::user()->name;

    /**
     * Validation method for company creation
     * Checks unique name,  required initial,
     *                      required address and location
     *                      varying max length each
     */
    $this->validate($request, [
        'cname' => 'required|unique:companies,company_name|max:255',
        'cinitials' => 'required|max:10',
        'caddress' => 'required|max:30',
        'clocation' => 'required|max:20',
    ]);
        // If the above checks, the users are stored in the DB
    	$Company->save();
        return view('companies.test');
    }
}
