<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;

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
        return view("users", ['users' => $data]);
    }

    function getData(Request $req)
    {
        return $req->input();
    }

    // db 
    function index()
    {
        return DB::select("SELECT * FROM users_tbl");
    }

    function getUsers()
    {
        return User::all();
    }

    function getUsersfromAPI()
    {
        $data = Http::get('https://reqres.in/api/users?page=1');
        return view('show_users', ['collection'=>$data['data']]);
    }

    function testRequest()
    {
        
    }
}