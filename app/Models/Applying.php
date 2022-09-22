<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applying extends Model
{
    use HasFactory;

    protected $dates = [
        'accepted_at',
    ];

    protected $guarded = [];

    // relationships
    public function employee()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
