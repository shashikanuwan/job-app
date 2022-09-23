<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applying extends Model
{
    use HasFactory;

    public const PENDING = 'pending';
    public const ACCEPTED = 'accepted';
    public const HOLD = 'hold';
    public const REJECT = 'reject';

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

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    //scope
    public function scopeOfEmployer(Builder $query, User $employer)
    {
        $query->whereHas('job', function (Builder $query) use ($employer) {
            $query->where('user_id', $employer->id);
        });
    }

    public function scopePending(Builder $query)
    {
        $query->where('status', $this::PENDING);
    }

    public function scopePrevious(Builder $query)
    {
        $query->whereNot('status', $this::PENDING);
    }

    // actions
    public function status($status)
    {
        $this->status = $status;
        $this->accepted_at = now();
        $this->save();
    }
}
