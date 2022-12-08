<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
// Login
public function Login() {
    return view('users.Login');
}

// Signin
public function Signin() {
    return view('users.Signin');
}
// Morecars
public function Morecars () {
    return view('users.Morecars');
}
public function spareparts () {
    return view('users.spareparts');
} 
public function Gallery () {
    return view('users.Gallery');
} 
public function Sale () {
    return view('users.Sale');
}
public function event () {
    return view('users.event');
} 
}