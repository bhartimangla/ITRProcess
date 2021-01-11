<?php

use Illuminate\Database\Seeder;
use App\Employee;
use Carbon\Carbon;

class createEmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
	        ['name' => 'A', 'email' => 'a@gmail.com', 'org_id' => '1', 'salary' => '12000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'B', 'email' => 'b@gmail.com', 'org_id' => '2', 'salary' => '30000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'C', 'email' => 'c@gmail.com', 'org_id' => '3', 'salary' => '35000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'D', 'email' => 'd@gmail.com', 'org_id' => '4', 'salary' => '42000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'E', 'email' => 'e@gmail.com', 'org_id' => '5', 'salary' => '50000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'F', 'email' => 'f@gmail.com', 'org_id' => '11', 'salary' => '10000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'G', 'email' => 'g@gmail.com', 'org_id' => '12', 'salary' => '16000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'H', 'email' => 'h@gmail.com', 'org_id' => '3', 'salary' => '70000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'I', 'email' => 'i@gmail.com', 'org_id' => '14', 'salary' => '90000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'J', 'email' => 'j@gmail.com', 'org_id' => '15', 'salary' => '60000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'K', 'email' => 'k@gmail.com', 'org_id' => '21', 'salary' => '13000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'L', 'email' => 'l@gmail.com', 'org_id' => '22', 'salary' => '42000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'M', 'email' => 'm@gmail.com', 'org_id' => '23', 'salary' => '51000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'N', 'email' => 'n@gmail.com', 'org_id' => '14', 'salary' => '59000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'O', 'email' => 'o@gmail.com', 'org_id' => '15', 'salary' => '80000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'P', 'email' => 'p@gmail.com', 'org_id' => '1', 'salary' => '49000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'Q', 'email' => 'q@gmail.com', 'org_id' => '2', 'salary' => '41000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'R', 'email' => 'r@gmail.com', 'org_id' => '3', 'salary' => '35000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'S', 'email' => 's@gmail.com', 'org_id' => '4', 'salary' => '32000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'T', 'email' => 't@gmail.com', 'org_id' => '5', 'salary' => '36800', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'U', 'email' => 'u@gmail.com', 'org_id' => '11', 'salary' => '42300', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'V', 'email' => 'v@gmail.com', 'org_id' => '12', 'salary' => '98000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'W', 'email' => 'w@gmail.com', 'org_id' => '3', 'salary' => '21000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'X',  'email' => 'x@gmail.com', 'org_id' => '14', 'salary' => '25000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'Y',  'email' => 'y@gmail.com', 'org_id' => '15', 'salary' => '28000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'Z', 'email' => 'z@gmail.com', 'org_id' => '21', 'salary' => '18000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'A1',  'email' => 'a1@gmail.com', 'org_id' => '22', 'salary' => '33000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'B1',  'email' => 'b1@gmail.com', 'org_id' => '23', 'salary' => '77000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'C1',  'email' => 'c1@gmail.com', 'org_id' => '24', 'salary' => '54000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'D1',  'email' => 'd1@gmail.com', 'org_id' => '25', 'salary' => '66000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'E1',  'email' => 'e1@gmail.com', 'org_id' => '2', 'salary' => '24000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'F1',  'email' => 'f1@gmail.com', 'org_id' => '30', 'salary' => '14000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'G1',  'email' => 'g1@gmail.com', 'org_id' => '30', 'salary' => '17000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'H1',  'email' => 'h1@gmail.com', 'org_id' => '9', 'salary' => '21000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'I1',  'email' => 'i1@gmail.com', 'org_id' => '10', 'salary' => '56000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'J1',  'email' => 'j1@gmail.com', 'org_id' => '16', 'salary' => '89000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'K1',  'email' => 'k1@gmail.com', 'org_id' => '17', 'salary' => '79000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'L1',  'email' => 'l1@gmail.com', 'org_id' => '18', 'salary' => '71000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'M1',  'email' => 'm1@gmail.com', 'org_id' => '19', 'salary' => '63000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'N1',  'email' => 'n1@gmail.com', 'org_id' => '20', 'salary' => '65000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'O1',  'email' => 'o1@gmail.com', 'org_id' => '2', 'salary' => '40000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'P1',  'email' => 'p1@gmail.com', 'org_id' => '29', 'salary' => '30000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'Q1',  'email' => 'q1@gmail.com', 'org_id' => '9', 'salary' => '20000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'R1', 'email' => 'r1@gmail.com', 'org_id' => '29', 'salary' => '27000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'S1', 'email' => 's1@gmail.com', 'org_id' => '30', 'salary' => '37000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'T1', 'email' => 't1@gmail.com', 'org_id' => '6', 'salary' => '46000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'U1', 'email' => 'u1@gmail.com', 'org_id' => '7', 'salary' => '81000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],        
	        ['name' => 'V1', 'email' => 'v1@gmail.com', 'org_id' => '8', 'salary' => '76000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'W1', 'email' => 'w1@gmail.com', 'org_id' => '9', 'salary' => '16000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'X1', 'email' => 'x1@gmail.com', 'org_id' => '9', 'salary' => '8000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'Y1', 'email' => 'y1@gmail.com', 'org_id' => '16', 'salary' => '11000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'Z1', 'email' => 'z1@gmail.com', 'org_id' => '17', 'salary' => '13000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'A2', 'email' => 'A2@gmail.com', 'org_id' => '18', 'salary' => '23000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'B2', 'email' => 'b2@gmail.com', 'org_id' => '19', 'salary' => '43000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'C2', 'email' => 'c2@gmail.com', 'org_id' => '25', 'salary' => '39000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'D2', 'email' => 'd2@gmail.com', 'org_id' => '26', 'salary' => '51000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'E2', 'email' => 'e2@gmail.com', 'org_id' => '27', 'salary' => '58000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'F2', 'email' => 'f2@gmail.com', 'org_id' => '28', 'salary' => '63000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'G2', 'email' => 'g2@gmail.com', 'org_id' => '29', 'salary' => '19000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
	        ['name' => 'H2', 'email' => 'h2@gmail.com', 'org_id' => '30', 'salary' => '9000', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]
	    ];

	    Employee::insert($employees);
    }
}
