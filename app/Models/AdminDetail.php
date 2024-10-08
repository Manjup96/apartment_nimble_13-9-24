<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'mobile',
        'email',
        'city',
        'state',
        'country',
        'pincode',
        'apartment_name',
        'apartment_purpose',
        'apartment_address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
