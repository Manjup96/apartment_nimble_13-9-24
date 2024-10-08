<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminOtp extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'otp', 'is_used'];

    public $timestamps = false; // If you do not want timestamps
}
