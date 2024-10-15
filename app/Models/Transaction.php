<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [
        'id',
    ];

    public function vpsPlan()
    {
        return $this->belongsTo(VpsPlans::class, 'vps_id', 'id');
    }
}
