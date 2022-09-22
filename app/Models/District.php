<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class District extends Model
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

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function jobs()
    {
        return $this->belongsTo(Job::class);
    }
}
