<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function getGenderNameAttribute(): string
    {
        $genderValue = $this->gender;
        if($genderValue === 0) {
            $gender = 'Nữ';
        } else if ($genderValue === 1) {
            $gender = 'Nam';
        } else {
            $gender = 'Khác';
        }

        return $gender;
    }

    public function getAgeAttribute(): int
    {
        return date_diff(date_create($this->birth_date), date_create())->y;
    }
}
