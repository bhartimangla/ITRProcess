<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Organization extends Model
{
    protected $table = 'organizations';

    protected $fillable = [
        'company_name'
    ];

	public function employees()
    {
        return $this->hasMany(Employee::class,'org_id','org_id');
    }
}
