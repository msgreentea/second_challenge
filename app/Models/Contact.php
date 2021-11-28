<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'firstname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion',
    ];

    public static $ValidationRules = array(
        'lastname' => 'required',
        'firstname' => 'required',
        'gender' => 'required',
        'email' => 'required | email:rfc,dns',
        'postcode' => 'required | max:8',
        'address' => 'required',
        'opinion' => 'required | max:120'
    );
}