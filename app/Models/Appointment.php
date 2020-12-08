<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;

class Appointment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        'appointed_to',
        'patient_id',
        'doctor_id',
        'user_id',
    ];


    public static function search($query)
    {
        return empty($query) ? static::query()
        :   static::join('doctors', 'appointments.doctor_id', '=', 'doctors.id')
                ->orwhere('doctors.name', 'like', '%'.$query.'%')
                ->orWhere('doctors.lastname', 'like', '%'.$query.'%')
                ->join('patients', 'appointments.patient_id', '=', 'patients.id')
                ->orwhere('patients.name', 'like', '%'.$query.'%')
                ->orWhere('patients.lastname', 'like', '%'.$query.'%');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

}
