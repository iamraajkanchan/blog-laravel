<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($user) {
        return ['name' => $user, 'age' => 32];
    }
}
