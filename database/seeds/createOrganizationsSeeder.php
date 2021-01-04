<?php

use Illuminate\Database\Seeder;
use App\Organization;
use Carbon\Carbon;

class createOrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organizations = [
	        ['org_id' => 1, 'company_name' => 'ABC Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 2, 'company_name' => 'DEF Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 3, 'company_name' => 'GHI Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 4, 'company_name' => 'JKL Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 5, 'company_name' => 'MNO Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 6, 'company_name' => 'PQR Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 7, 'company_name' => 'STU Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 8, 'company_name' => 'VWX Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 9, 'company_name' => 'YZA Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 10, 'company_name' => 'BCD Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 11, 'company_name' => 'EFG Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 12, 'company_name' => 'HIJ Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 13, 'company_name' => 'KLM Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 14, 'company_name' => 'NOP Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 15, 'company_name' => 'QRS Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 16, 'company_name' => 'TUV Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 17, 'company_name' => 'WXY Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 18, 'company_name' => 'ZAB Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 19, 'company_name' => 'CDE Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 20, 'company_name' => 'FGH Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 21, 'company_name' => 'IJK Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 22, 'company_name' => 'LMN Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 23, 'company_name' => 'OPQ Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 24, 'company_name' => 'RST Pvt Ltd',  'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 25, 'company_name' => 'UVW Pvt Ltd',  'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 26, 'company_name' => 'XYZ Pvt Ltd', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 27, 'company_name' => 'CBA Pvt Ltd',  'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 28, 'company_name' => 'FED Pvt Ltd',  'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 29, 'company_name' => 'KJI Pvt Ltd',  'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['org_id' => 30, 'company_name' => 'NML Pvt Ltd',  'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]
	    ];
	    	
	    Organization::insert($organizations);
    }
}
