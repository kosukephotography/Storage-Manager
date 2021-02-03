<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'updated_by',
        'created_by',
        'storage_id',
        'start_date',
        'end_date',
    ];

    public function createdByUser()
    {
        return $this->hasOne(\App\Models\User::class, 'id', 'created_by');
    }

    public function updatedByUser()
    {
        return $this->hasOne(\App\Models\User::class, 'id', 'updated_by');
    }

    public function scopeWhereHasReservation($query, $start, $end) {
        $query->where(function($q) use($start, $end) {
            $q->where('start_date', '>=', $start)
                ->where('start_date', '<=', $end);
        })
        ->orWhere(function($q) use($start, $end) {
            $q->where('end_date', '>=', $start)
                ->where('end_date', '<=', $end);
        })
        ->orWhere(function($q) use($start, $end) {
            $q->where('start_date', '<=', $start)
                ->where('end_date', '>=', $end);
        });
    }
}
