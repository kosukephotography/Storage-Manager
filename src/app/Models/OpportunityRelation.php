<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpportunityRelation extends Model
{
    use HasFactory;

    public function createdByUser()
    {
        return $this->hasOne(\App\Models\User::class, 'id', 'created_by');
    }

    public function updatedByUser()
    {
        return $this->hasOne(\App\Models\User::class, 'id', 'updated_by');
    }
}