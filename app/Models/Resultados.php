<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultados extends Model
{
    use HasFactory;

     protected $fillable = ['car', 'circuit', 'series', 'DNF', 'incidents', 'laps', 'x4tome', 'x4toothers', 'start_position', 'finish_position', 'irating', 'safety_rating',
         'seconds_to_pole', 'seconds_end_race', 'SOF', 'training', 'did_qualy'];
}
