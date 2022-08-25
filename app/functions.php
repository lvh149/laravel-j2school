<?php

use App\Enums\UserRoleEnum;

if (!function_exists('user')) {
    function user(): ?object
    {
        return auth()->user();
    }
}

if (!function_exists('isSuperAdmin')) {
    function isSuperAdmin(): bool
    {
        return user() && user()->role === UserRoleEnum::SUPER_ADMIN;
    }
}

if (!function_exists('isAdmin')) {
    function isAdmin(): bool
    {
        return user() && user()->role === UserRoleEnum::ADMIN;
    }
}

if (!function_exists('isDoctor')) {
    function isDoctor(): bool
    {
        return user() && user()->role === UserRoleEnum::DOCTOR;
    }
}
