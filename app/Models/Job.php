<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // relationships
    public function employer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function workLocation()
    {
        return $this->belongsTo(WorkLocation::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function employmentType()
    {
        return $this->belongsTo(EmploymentType::class);
    }
}
