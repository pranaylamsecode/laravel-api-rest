<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
   public function index(Request $request)
   {
        $all = $request->all();
      
      $response =   Book::create($all);

      return response()->json([
        'message' => 'Success.',
        'data' => $response
         ]);

   }
}
