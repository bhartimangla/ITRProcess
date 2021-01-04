<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Organization;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function companiesList() {
    	$notFillITRCompanies = [];
    	$companiesInfo = Organization::with('employees')->get();

    	foreach ($companiesInfo as $key1 => $company) {
    		$fillITR = true;

    		foreach ($company->employees as $key2 => $employee) {

    			if (($employee->salary * 12) >= 500000) {
    				$fillITR = false;
    			}
    		}

    		if ($fillITR) {
    			array_push($notFillITRCompanies, $company);
    		}
    		
    	}

		return view('welcome')->with('companiesInfo', $notFillITRCompanies); 	
    }

}
