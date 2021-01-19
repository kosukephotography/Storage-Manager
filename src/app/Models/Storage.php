<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;

    protected $fillable = [
        'maker',
        'model_number',
        'serial_number',
        'size',
        'types',
        'supported_os',
        'recovery_key',
        'password',
        'deleted_at',
        'reason',
        'updated_by',
];

    public function opportunityRelations() {
        return $this->hasMany(\App\Models\OpportunityRelation::class);
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
