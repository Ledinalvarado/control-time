<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeekReport extends Model
{
    //
    protected $fillable = [
      'fecha_inicio',
        'fecha_final',
    ];
}
