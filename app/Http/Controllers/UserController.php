<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function getuserlist()
    {
        $users = User::all();

        return Inertia::render('User/userslist',["users"=>$users]); // render inertia view location resources/js/pages
    }
}
