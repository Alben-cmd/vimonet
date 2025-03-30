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

    protected $guarded = [''];

    public function patient():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function appointments():HasOne
    {
        return $this->hasOne(Appointment::class);
    }

    public function questionnaire():HasMany
    {
        return $this->hasMany(ComplaintQuestionnaire::class);
    }

    public function specialist():BelongsTo
    {
        return $this->belongsTo(Specialist::class);
    }

    public function patientSpecialist():HasOne
    {
        return $this->hasOne(PatientSpecialist::class);
    }
}
