<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;

use App\Http\Requests;

class CompanyController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function add_company(Request $request) {
    	//TODO Make a validation ya hizo entries
    	$Company = New Company;
    	$Company->company_name = $request->cname;
    	$Company->company_initials = $request->cinitials;
    	$Company->company_address = $request->caddress;
    	$Company->company_location = $request->clocation;
        $Company->created_by = 'Admin';

    	$Company->save();
        return view('test');
    }
}
