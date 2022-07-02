<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable =[
        'name',
        'birth_date',
        'specialist_id',
        'avatar',
        'email',
        'password',
        'phone',
        'gender',
        'nationality',
        'address',
        'degree',
        'experience',
        'price',
    ];

    public function getGenderNameAttribute(): string
    {
        return ($this->gender === 0) ? 'Nữ' : 'Nam';
    }
    public function getAgeAttribute(): int
    {
        return date_diff(date_create($this->birth_date), date_create())->y;
    }
    public function specialist(): BelongsTo
    {
        return $this->belongsTo(Specialist::class);
    }
}
