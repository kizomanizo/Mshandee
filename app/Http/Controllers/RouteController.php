<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class RouteController extends Controller
{

    /**
     * Checks the database tables if the contents are more than one
     * @var num
     */
    private $company;
    private $department;
    private $title;
    private $employee;
    private $deduction;
    private $tax;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->company;
        $this->department;
        $this->title;
        $this->employee;
        $this->deduction;
        $this->tax;
    }

    public function links ()
    {
        $this->company = Company::count();
        $this->departments = 0;
        $this->title = 0;
        $this->employee = 0;
        $this->deduction = 0;
        $this->tax = 0;

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
        $sidebar = array(
                'company' => $this->company,
                'department' => $this->department,
                'title' => $this->title,
                'employee' => $this->employee,
                'deduction' => $this->deduction,
                'tax' => $this->tax
            );
        if(Company::count() > 0) {
            $data = array(
                'heading' => 'Dashboard',
                'center' => '1',
                'style' => '@media (max-width: 991px) .main-panel { width: calc(100% - 260px); min-height: 100%; } .centered { width: calc(100% - 0px); min-height: 100%; }',
                'sidebar' => $sidebar
                // 'company' => $this->company,
                // 'department' => $this->department,
                // 'title' => $this->title,
                // 'employee' => $this->employee,
                // 'deduction' => $this->deduction,
                // 'tax' => $this->tax
            );
            return view('dashboard.home')->with($data);
        }
        else {
            $data = array(
                'heading' => 'Company | Settings',
                'center' => '2',
                'style' => '.main-panel { width: calc(100% - 0px); min-height: 100%; }@media (max-width: 991px) .centered { width: calc(100% - 260px); min-height: 100%; }',
                'sidebar' => $sidebar
                // 'company' => $this->company,
                // 'department' => $this->department,
                // 'title' => $this->title,
                // 'employee' => $this->employee,
                // 'deduction' => $this->deduction,
                // 'tax' => $this->tax
             );
            return view('companies.add_company')->with($data);
        }
    }

    public function listcompanies() {
        $data = array(
                'heading' => 'Companies',
                'center' => '1',
                'style' => '@media (max-width: 991px) .main-panel { width: calc(100% - 260px); min-height: 100%; } .centered { width: calc(100% - 0px); min-height: 100%; }',
                'company' => $this->tables[$company],
                'department' => $this->tables[$department],
                'title' => $this->tables[$title],
                'employee' => $this->tables[$employee],
                'deduction' => $this->tables[$deduction],
                'tax' => $this->tables[$tax]
            );
            return view('companies.company')->with($data);
    }
}
