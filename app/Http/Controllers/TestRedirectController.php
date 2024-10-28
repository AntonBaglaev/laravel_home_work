<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRedirectController extends Controller
{
    //
    public function __invoke() {
//        return redirect() -> away('http://google.com');
//        return redirect() -> action([LibraryUserController::class, 'showUser'], ['id' => 0]);
          return redirect() -> route('books');
    }
}
