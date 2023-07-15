<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class people_model extends Model
{
    protected $table = 'people';

    protected $fillable = [
        'firstName',
        'surname',
        'email',
        'phone-number',
        'street',
        'city',
       
    ];

    public $timestamps = true;
}
