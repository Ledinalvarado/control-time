<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    //DepartmentFormat relationships
    //Many Companies belongs to many DepartmentFormat

    public function department_formats(){
        return $this->belongsToMany('App\DepartmentFormat');
    }

    public function summaries(){
        return $this->hasMany('App\FirstSummary');
    }
}
