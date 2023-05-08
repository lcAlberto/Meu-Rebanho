<?php

namespace App\Enums;

abstract class UserRolesEnum extends Enum
{
    const ROOT = 'root';
    const ADMIN = 'admin';
    const CLIENT = 'client';
}
