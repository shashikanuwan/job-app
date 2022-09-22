<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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

    //bool
    public function hasApply(User $user): bool
    {
        return Applying::query()
            ->where('user_id', $user->id)
            ->where('job_id', $this->id)
            ->exists();
    }

    //scope
    public function scopeForId($query, $id)
    {
        return $query->where('id', $id);
    }

    //action
    public function applyJob(User $user, $working_status, $cv)
    {
        $applying = new Applying();
        $applying->working_status = $working_status;
        $applying->job_id = $this->id;
        $applying->user_id = $user->id;
        $applying->save();

        $this->storeFile($applying, $cv);
    }

    private function storeFile(Applying $applying, UploadedFile $file = null)
    {
        if ($file != null) {
            $filename = $applying->id . '.' . $file->getClientOriginalExtension();
            Storage::disk('local')->put('applying/' . $filename, file_get_contents(request()->file('cv')->getRealPath()), 'public');
            $applying->cv = $filename;
            $applying->save();
        }
    }

    public function getAlreadyAppliedAttribute()
    {
        if ($this->hasApply(Auth::user())) {
            return true;
        }
    }
}
