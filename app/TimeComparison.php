<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeComparison extends Model
{
    protected $fillable = [
      'second_summary_id',
        'time_comparison_id',
    ];

    public function secondSummary(){
        return $this->belongsTo('App\SecondSummary');
    }

    public function budgetedHour(){
        return $this->belongsTo('App\BudgetedHour');
    }
}
