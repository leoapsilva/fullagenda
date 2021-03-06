<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'name',
        'lastname',
        'mobile',
        'specialty',
    ];

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('name', 'like', '%'.$query.'%')
                ->orWhere('lastname', 'like', '%'.$query.'%')
                ->orWhere('specialty', 'like', '%'.$query.'%');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }


}
