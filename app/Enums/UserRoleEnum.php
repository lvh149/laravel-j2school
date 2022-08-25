<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRoleEnum extends Enum
{
    public const SUPER_ADMIN = 0;
    public const ADMIN = 1;
    public const DOCTOR = 2;

    public static function getRole(): array
    {
        return [
            'Quản lý'  => self::SUPER_ADMIN,
            'Nhân viên'  => self::ADMIN,
            'Bác sĩ'  => self::DOCTOR,
        ];
    }

    public static function getKeyByValue($value): string
    {
        return array_search($value, self::getRole(), true);
    }
}

