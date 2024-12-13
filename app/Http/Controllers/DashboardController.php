<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class DashboardController extends Controller
{
    
    public function index()
{
    $books = Book::with(['author', 'category'])->get(); // Merr të gjitha librat
    return view('dashboard', compact('books')); // Kalo variablen $books te view
}
}
