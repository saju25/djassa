<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DeliveryCompany;
use App\Models\Post;
use Illuminate\Http\Request;

// Use Laravel's Request class

class CartController extends Controller
{
    public function index(Request $request)
    {
        $product = Post::where('id', $request->product_id)->first();
        $delivery = DeliveryCompany::all();
        $postData = $request->all();

        return view('user.profile.cart-page', compact('product', 'postData', 'delivery'));
    }

}
