<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Post;
use App\Models\SocialMedia;
use App\Models\User;
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
//  dd($user->sub_id);

        if (empty($user->sub_id)) {
            return redirect()->route('user.sub');
        } else {
            $user = $request->user();

            $posts = Post::where('user_id', $user->id)->get();

            return view('user.profile.my-add', compact('user', 'posts'));

        }

    }
    public function orderList(Request $request)
    {
        $user = $request->user();

        if (empty($user->sub_id)) {
            return redirect()->route('user.sub');
        } else {
            $posts = Post::all();
            $orders = Order::where('post_by_user', $user->id)
                ->orderBy('created_at', 'desc') // Sort in descending order for LIFO
                ->get();
            $userid = 0;

            foreach ($orders as $order) {
                $userid = $order->user_id;
            }
            $postsById = $posts->keyBy('id');
            return view('user.profile.my-order', compact('user', 'orders', 'postsById', 'userid'));

        }

    }
    public function buyingOrder(Request $request)
    {
        $user = $request->user();

        $posts = Post::all();
        $orders = Order::where('user_id', $user->id)
            ->orderBy('created_at', 'desc') // Sort in descending order for LIFO
            ->get();
        $userid = 0;
        foreach ($orders as $order) {
            $userid = $order->user_id;
        }
        $postsById = $posts->keyBy('id');
        return view('user.profile.buying-product', compact('user', 'orders', 'postsById', 'userid'));

    }
    public function orderPrint($id, $s_id, $c_id)
    {
        $posts = Post::all();
        $orders = Order::where('id', $id)->get();
        $shop = User::where('id', $s_id)->first();
        $customar = User::where('id', $c_id)->first();
        $postsById = $posts->keyBy('id');

        return view('user.profile.order-detail', compact('orders', 'postsById', 'shop', 'customar'));
    }

    public function stockOut(Request $request)
    {
        $user = $request->user();
        //  dd($user->sub_id);

        if (empty($user->sub_id)) {
            return redirect()->route('user.sub');
        } else {
            $posts = Post::where('user_id', $user->id)
                ->where('sku', '1') // Only fetch posts where sku is '1'
                ->get();

            return view('user.profile.stock-out-product', compact('user', 'posts'));

        }

    }

}
