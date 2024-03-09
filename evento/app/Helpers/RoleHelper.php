<?php

namespace App\Helpers;

class RoleHelper {

    public static function getRole() {
        return auth()->user()->role;
    }
}
