<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    const CARGABLE = 'cargable';
    const NO_CARGABLE ='no cargable';

    protected $fillable = [
      'name',
      'category_id',
        'tipo_actividad',
    ];

    public function isCargable(){
        return $this -> tipo_actividad = Activity::CARGABLE;
    }

    public function category_activities(){
        return $this->belongsTo('App\Category');
    }

    public function activity_work_hours(){
        return $this->hasMany('App\WorkHour');
    }
}
