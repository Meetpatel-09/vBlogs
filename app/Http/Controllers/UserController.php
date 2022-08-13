<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // function loadView($id)
    // function loadView($user)
    function loadView()
    {
        // return "Hello from controller $id";
        // return view("users", ['user'=>$user]);
        $data = ['Meet', 'Prince', 'Neel'];
        // return view("users");
        return view("users", ['users'=>$data]);
    }

    function getData(Request $req) {
        return $req->input();
    }
}
