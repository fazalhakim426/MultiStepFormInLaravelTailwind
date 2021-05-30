<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StepUI extends Model
{
    use HasFactory;
    public $table='step_u_i_s';
    public $timestamps = false;
    protected $fillable = [
        'first_name',
        'last_name',

        'city',
        'address',

        'zip_code',
        'email',

        'question1',
        'question2',
        'question3',
        'question4',
        'question5',
        'question6',

        'completed',
    ];
}
