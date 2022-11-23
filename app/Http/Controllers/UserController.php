<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function registerUser(Request $req)
    {
        dd($req->all());
    }
}
