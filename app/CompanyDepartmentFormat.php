<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDepartmentFormat extends Model
{
    //
    protected $fillable = [
        'company_id',
        'department_id',
    ];
}
