<?php

namespace App\Helpers;

class RoleHelper {

    public static function redirect() {
        switch (auth()->user()->role){
            case 'admin':
                return 'admin';
            case 'organizer':
                return 'organizers.index';
            case 'user':
                return 'users.index';
        }
    }
}
