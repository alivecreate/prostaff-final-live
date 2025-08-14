<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        // Retrieve and display cart contents
        return view('cart.show');
    }

    public function add(Request $request)
    {
        // Add item to the cart
        // Example: Cart::add($request->id, $request->name, $request->price, $request->quantity);
    }

    public function update(Request $request)
    {
        // Update item quantity in the cart
        // Example: Cart::update($request->id, $request->quantity);
    }

    public function remove(Request $request)
    {
        // Remove item from the cart
        // Example: Cart::remove($request->id);
    }
}
