<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RelationsController extends Controller
{
    public function displayCompanyData($id): View
    {

        $company = Company::find($id);
        $branches = $company->branchEmployees;
        $employees = '';
        
        return view('relations.index',['company'=>$company,'branches'=>$branches,'employees'=>$employees]);
    }
}
