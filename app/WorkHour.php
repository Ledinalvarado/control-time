<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkHour extends Model
{
    protected $fillable = [
      'actividad_id',
      'cantidad',
      'dia',
    ];


    public function hours_per_activities(){
        return $this->belongsTo('App\Activity');
    }

    public function sumaries(){
        return $this->belongsToMany('App\FirstSummary');
    }
}
