<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentFormat extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function companies(){
        return $this->belongsToMany('App\Company');
    }

    public function categories(){
        return $this->hasMany('App\Category');
    }

    public function firstFormat(){
        return $this->hasMany('App\FirstFormatSummary');
    }
}
