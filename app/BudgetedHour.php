<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetedHour extends Model
{
    protected $fillable = [
      'cantidad',
      'empresa_id',
      'anio',
    ];


    public function companies(){
        return $this->belongsTo('App\Company');
    }

    public function timeComparison(){
        return $this->hasMany('App\TimeComparison');
    }
}
