<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Ensure you use the correct model

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        // dd($request->all());
        $request->validate([
            'add_id' => 'nullable|string',
            'color' => 'nullable|string',
            'size' => 'nullable|string',
            'weight' => 'nullable|string',
            'city' => 'nullable|string',
            'number' => 'nullable|string',
            'zip_code' => 'nullable|string',
        ]);
        $user = Auth::user();

        // Create a new order using the validated data

        $order = new Order();
        $order->user_id = $user->id;
        $order->add_id = $request->input('add_id');
        $order->color = $request->input('color');
        $order->size = $request->input('size');
        $order->weight = $request->input('weight');
        $order->total_amount = $request->input('total_amount');
        $order->city = $request->input('city');
        $order->number = $request->input('number');
        $order->zip_code = $request->input('zip_code');
        $order->save();
        // Redirect to a desired route with a success message
        return redirect()->route('home')->with('success', 'Order created successfully.');
    }
}
