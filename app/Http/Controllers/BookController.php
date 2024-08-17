<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $book = Book::all();
        if($book->isEmpty()) 
        {
            return response()->json([
                'message' => 'Data Books Kosong',
                'error' => true
            ], 404); //404 Not Found
        }

        return response()->json([
            'data' => $book,
            'message' => 'Data Books Ditemukan',
            'status' => 200
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'rack_id' => 'required|exists:racks,id',
            'release_date' => 'required|date_format:Y',
            'ISBN' => 'required|string|max:20|unique:books,ISBN',
            'stock' => 'required|integer|min:1',
        ]);

        if($validator->fails()) 
        {
            return response()->json([
                'status' => 404,
                'message' => 'Ada Kesalahan',
                'data' => $validator->erros(),
            ]);
        }

        $book = Book::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'rack_id' => $request->rack_id,
            'release_date' => $request->release_date,
            'ISBN' => $request->ISBN,
            'stock' => $request->stock,
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Data Books Berhasil Ditambahkan',
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
