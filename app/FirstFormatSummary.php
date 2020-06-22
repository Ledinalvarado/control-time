<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirstFormatSummary extends Model
{
    //
    protected $fillable = [
        'department_id',
    ];

    public function department(){
        return $this->belongsTo('App\DepartmentFormat');
    }

    public function categoryFirstSummary(){
        return $this->belongsToMany('App\Category');
    }
}
