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

    //A format can has many FirstSummaries
    public function firstSummaries(){
        return $this->hasMany('App\FirstSummary');
    }

    public function categoryFirstSummary(){
        return $this->belongsToMany('App\Category');
    }
}
