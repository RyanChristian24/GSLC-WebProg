<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id){

        $user_data = User::find($id);

        return view('profile', compact('user_data'));
    }
}
