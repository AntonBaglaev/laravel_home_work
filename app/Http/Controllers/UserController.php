<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    //public function showUsers() {
    //   $users = DB::connection('mysql')->table('user')->select(['first_name', 'last_name', 'email'])->get();
    //   print_r($users);
    //}

    public function __invoke(){
        $users = DB::connection('mysql')->table('user')->select(['first_name', 'email'])->get();
//        return view('users', ['users' => $users]);
        return view('user', ['users' => $users]);
    }
}
