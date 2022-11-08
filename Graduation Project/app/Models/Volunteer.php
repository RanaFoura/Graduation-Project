<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\Volunteer as Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Volunteer extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'university',
        'student_id',
        'dob',
        'vol_points',
        
    ];
   

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
