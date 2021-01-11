<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Organization;
use App\Employee;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function companiesList() {
    	// $notFillITRCompanies = [];
    	$companiesInfo = Organization::with('employees')->get();

    	// foreach ($companiesInfo as $key1 => $company) {
    	// 	$notfillITR = true;

    	// 	foreach ($company->employees as $key2 => $employee) {

    	// 		if (($employee->salary * 12) >= 500000) {
    	// 			$notfillITR = false;
    	// 		}
    	// 	}

    	// 	if ($notfillITR) {
    	// 		array_push($notFillITRCompanies, $company);
    	// 	}
    		
    	// }

		// return view('welcome')->with('companiesInfo', $notFillITRCompanies);
        return view('welcome')->with('companiesInfo', $companiesInfo); 	
    }

    public function notFillITREmployeesList($id) {
        $employeesInfo = Employee::selectRaw('name, salary*12 as yearlySalary')
            ->where([['org_id', '=', $id],['salary', '<', 500000/12]])
            ->get();

        return view('not-fill-itr-employees')->with('employeesInfo', $employeesInfo);  
    }

}
