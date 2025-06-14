<?php
namespace App\Enums\RoleAndPermission;

enum RoleEnum: string
{
    case ADMIN = 'admin';
    case USER = 'user';
}