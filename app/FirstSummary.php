<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirstSummary extends Model
{
    protected $fillable = [
        'formato_id',
        'semana_id',
        'empresa_id',
        'user_id',
        'horas_cargables',
        'observacion',
    ];

    //Many first summary can belong to a FirstFormatSummary
    public function firstFormatSummary(){
        return $this->belongsTo('App\FirstFormatSummary');
    }

    //Many summary can belong to a same WeekReport
    public function weeks(){
        return $this->belongsTo('App\WeekReport');
    }

    public function companies(){
        return $this->belongsTo('App\Company');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function work_hour(){
        return $this->belongsToMany('App\WorkHour');
    }
}
