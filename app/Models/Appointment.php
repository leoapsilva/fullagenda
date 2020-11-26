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
            : static::where('doctor', 'like', '%'.$query.'%')
                ->orWhere('patient', 'like', '%'.$query.'%')
                ->orWhere('user', 'like', '%'.$query.'%');
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
