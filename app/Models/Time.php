<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Time extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable =[
        'date',
        'time_start',
        'time_end',
    ];
    public function time_doctor(): HasMany
    {
        return $this->hasMany(Time_doctor::class);
    }
}
