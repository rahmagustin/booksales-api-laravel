<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index() {
        $transactions = Transaction::with('user', 'book')->get();

        if($transactions->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }
        return response()->json([
                "success" => true,
                "message" => "Get all resource",
                "data" =>$transactions
            ]);
    }

    public function store(Request $request) {
       //validator
       $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
       ]);

       if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validator error',
                'data' => $validator->errors()
            ], 422);
       }

       //generate order number
       $uniqueCode = "ORD-" . strtoupper(uniqid());

       //cek user
       $user = auth('api')->user();

       if (!$user) {
        return response()->json([
            'success' => false,
            'message' => 'Unauthorized'
        ], 401);
       }

       //cari book
       $book = Book::find($request->book_id);

       //cek stok book
       if ($book->stock < $request->quantity) {
        return response()->json([
            'success' => false,
            'message' => 'Stok barang tidak cukup!'
        ], 400);
       }

       //harga total
       $totalAmount = $book->price * $request->quantity;

       //kurangi stok book
       $book->stock -= $request->quantity;
       $book->save();

       //save transaction 
       $transactions = Transaction::create([
        'order_number' => $uniqueCode,
        'customer_id' => $user->id,
        'book_id' => $request->book_id,
        'total_amount' => $totalAmount
       ]);

       return response()->json([
        'success' => true,
        'message' => 'Transaction created successfully!',
        'data' => $transactions
       ], 201);
    }
}
