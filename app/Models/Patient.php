<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = ['birthday' => 'date'];

    protected $fillable = [
        'name',
        'lastname',
        'mobile',
        'birthday',
        'health_insurance_plan',
    ];

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('name', 'like', '%'.$query.'%')
                ->orWhere('lastname', 'like', '%'.$query.'%');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
