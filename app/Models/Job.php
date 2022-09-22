<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Job extends Model
{
    use HasFactory;
    use HasSlug;

    protected $dates = [
        'expiry_date',
    ];

    protected $guarded = [];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return $this->slug;
    }

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

    public function applying()
    {
        return $this->hasMany(Applying::class);
    }
}
