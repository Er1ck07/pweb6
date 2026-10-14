<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('order');
    }

    // Handle order submission
    public function store(Request $request)
    {
        // Validate the incoming order data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'item' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'address' => 'required|string|max:500',
        ]);

        // Here you would typically save $validated data to a database table.
        // For now, we will redirect back with a success message.

        return redirect('/order')->with('success', 'Thank you, ' . $validated['name'] . '! Your order for ' . $validated['quantity'] . 'x ' . $validated['item'] . ' has been placed successfully.');
    }
}
