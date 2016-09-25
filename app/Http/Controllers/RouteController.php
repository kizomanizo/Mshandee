<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class RouteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * Checks to see if there is a company in the DB then jumps to its dashboard
     * if there is none, it allows the user to add a new Company
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        if(Company::count() > 0) {
            $data = array(
                'heading' => 'Dashboard',
                'center' => '1',
                'style' => '@media (max-width: 991px) .main-panel { width: calc(100% - 260px); min-height: 100%; } .centered { width: calc(100% - 0px); min-height: 100%; }'
            );
            return view('dashboard.home')->with($data);
        }
        else {
            $data = array(
                'heading' => 'Company | Settings',
                'center' => '2',
                'style' => '.main-panel { width: calc(100% - 0px); min-height: 100%; }@media (max-width: 991px) .centered { width: calc(100% - 260px); min-height: 100%; }'
            );
            return view('companies.add_company')->with($data);
        }
    }
}
