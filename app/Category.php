<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name',
        'department_format_id',
    ];


    public function departmentformats(){
        return $this->belongsTo('App\DepartmentFormat');
    }

    public function activities(){
        return $this->hasMany('App\Activity');
    }

    public function firstFormatSummary(){
        return $this->hasMany('App\FirstFormatSummary');
    }
}
