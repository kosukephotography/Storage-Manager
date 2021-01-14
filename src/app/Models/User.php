<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_number',
        'email',
        'family_name',
        'first_name',
        'is_admin',
        'created_by',
        'updated_by',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->family_name} {$this->first_name}";
    }
    public function createdByUser()
    {
        return $this->hasOne(\App\Models\User::class, 'id', 'created_by');
    }
    public function updatedByUser()
    {
        return $this->hasOne(\App\Models\User::class, 'id', 'updated_by');
    }
}
