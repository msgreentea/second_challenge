<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static $ValidationRules = array(
        // 'lastname.firstname' => 'required',
        'gender' => 'required',
        'email' => 'required | email:rfc,dns',
        'postcode' => 'required | max:8',
        'address' => 'required',
        'opinion' => 'required | max:120'
    );
    // public function getFirstNameAttribute($value)
    // {
    //     return ucfirst($value);
    // // }

    // ここに値を加工する編集するんかな…？
    // public function getDetail()
    // {
    //     $txt = 'ID:' . $this->id . ' ' . $this->name . '(' . $this->age .  '才' . ') ' . $this->nationality;
    //     return $txt;
    // }
}