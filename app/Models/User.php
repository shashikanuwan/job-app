<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,  HasRoles;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //bool
    public function isAdmin(): bool
    {
        return $this->hasRole(Role::ROLE_ADMIN);
    }

    public function isEmployer(): bool
    {
        return $this->hasRole(Role::ROLE_EMPLOYER);
    }

    public function isEmployee(): bool
    {
        return $this->hasRole(Role::ROLE_EMPLOYEE);
    }

    public function isAccountVerified(): bool
    {
        return $this->verify_account == 1;
    }

    public function isCompanyNotNull(): bool
    {
        return $this->company_name != null;
    }

    public function isDobNotNull(): bool
    {
        return $this->dob != null;
    }

    // relationships
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function applying()
    {
        return $this->hasMany(Applying::class);
    }
}
