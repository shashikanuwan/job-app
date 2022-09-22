<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class EmploymentType extends Model
{
    use HasFactory;
    use HasSlug;

    protected $guarded = [];
    
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return $this->slug;
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
