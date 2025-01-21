<?php

namespace App\Facade;

use Barsam\User\Models\User;

class Auth
{
    private static User $user;

    public static function check(): bool
    {
        return self::$user !== null;
    }

    public static function user(): ?User
    {
        return self::$user;
    }

    public static function setUser(User $user): void
    {
        self::$user = $user;
    }
}
