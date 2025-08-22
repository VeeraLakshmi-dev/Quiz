<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $fillable = [
        'college_name',
    ];

    // A college can have many users
    public function users()
    {
        return $this->belongsToMany(User::class, 'college_user', 'college_id', 'user_id');
    }
}
