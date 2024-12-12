<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class BookController extends Controller
{
    public function index(): View|Factory|Application
    {
        return view('form');
    }

    /**
     * @throws Exception
     */
    public function store(Request $request)
    {
        $result = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'author' => ['required', 'string', 'max:255'],
            'genre' => ['required'],
        ]);

        try {
            Book::create($result);
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }

        echo "Book {$result['title']} saved in store";
    }
}
