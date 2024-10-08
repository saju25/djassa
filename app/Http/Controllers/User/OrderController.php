<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Post;
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
            'post_by_user' => 'nullable|string',
            'color' => 'nullable|string',
            'size' => 'nullable|string',
            'weight' => 'nullable|string',
            'city' => 'nullable|string',
            'number' => 'nullable|string',
            'zip_code' => 'nullable|string',
            'dcompany' => 'nullable|string',
        ]);
        $user = Auth::user();

        // Update New sku

        $product = Post::findOrFail($request->input('add_id'));
        $new_sku = $product->sku - $request->input('quantity');
        $product->sku = $new_sku;
        $product->save();

        // Create a new order
        // dd($request->input('post_by_user'));
        $order = new Order();
        $order->user_id = $user->id;
        $order->add_id = $request->input('add_id');
        $order->post_by_user = $request->input('post_by_user');
        $order->quantity = $request->input('quantity');
        $order->color = $request->input('color');
        $order->size = $request->input('size');
        $order->weight = $request->input('weight');
        $order->total_amount = $request->input('total_amount');
        $order->city = $request->input('city');
        $order->number = $request->input('number');
        $order->zip_code = $request->input('zip_code');
        $order->dcompany = $request->input('dcompany');
        $order->status = $request->input('status');
        $order->save();
        // Redirect to a desired route with a success message
        return redirect()->route('home')->with('success', "Commande créée avec succès.");
    }

    public function update(Request $request, $id)
    {
        // Retrieve the order by ID
        $order = Order::find($id);

        // Check if the order exists
        if (!$order) {
            toastr()->error('Order not found!');
            return redirect()->back();
        }

        // Update the order's status
        $order->status = $request->input('status');
        $order->save();

        // Show a success message and redirect
        toastr()->success("Produit mis à jour avec succès !");
        return redirect()->route('profile.order');
    }

}
