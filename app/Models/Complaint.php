<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Complaint extends Model
{
    use HasFactory;

    public function patient():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function appointment():HasOne
    {
        return $this->hasOne(Appointment::class);
    }
}
