<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryUserController extends Controller
{
    protected $users = [
        ['id' => 0, 'username' => 'user1', 'first_name' => 'vasily', 'last_name' => 'pupkin', 'list_of_books' => ['Book1', 'Book3', 'Book4']],
        ['id' => 1, 'username' => 'user2', 'first_name' => 'ivan', 'last_name' => 'ivanov', 'list_of_books' => ['Book6', 'Book2', 'Book9']]
    ];
    //
    public function showUser($id) {
        return view('usernew', ['user' => $this->users[$id]] );
    }
}
