<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Post;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function candidateDetails(Request $request)
    {

        $user = $request->user();
        $socialMedia = SocialMedia::first();
        return view('user.profile.profile', compact('user', 'socialMedia'));
    }
    public function profileAdd(Request $request)
    {

        $user = $request->user();
        // Fetch posts and orders
        $posts = Post::where('user_id', $user->id)->get();

        return view('user.profile.my-add', compact('user', 'posts'));
    }
    public function orderList(Request $request)
    {
        $user = $request->user();

        // Fetch posts and orders
        $posts = Post::all();
        $orders = Order::where('user_id', $user->id)->get();

        // Transform posts into a keyed collection for quick lookup
        $postsById = $posts->keyBy('id');

        // Pass data to view
        return view('user.profile.my-order', compact('user', 'orders', 'postsById'));
    }

}
