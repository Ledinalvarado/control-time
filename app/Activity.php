<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $fillable = [
      'name',
      'category_id',
    ];

    public function category_activities(){
        return $this->belongsTo('App\Category');
    }

    public function activity_work_hours(){
        return $this->hasMany('App\WorkHour');
    }
}
