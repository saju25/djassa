<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'rating' => 'required|string|max:255',
            'comment' => 'required|string|max:255',
        ]);

        $order = Order::where('add_id', $request->post_id)
            ->orderBy('created_at', 'desc')
            ->first();

        if (empty($order->updated_at)) {
            toastr()->error('', "Si vous n'achetez pas le produit, vous ne pouvez pas commenter");

        } else {
            $daysPassed = Carbon::now()->diffInDays($order->updated_at);

// dd($order->status);
            if (empty($order->status)) {
                toastr()->error('', "Vous pouvez commenter après l'achat !");
            } else {
                if ($order->status == "Delivered") {
                    if ($daysPassed < 3) {
                        $user = Auth::user();
                        $comment = new comment();
                        $comment->user_id = $user->id;
                        $comment->post_id = $request->post_id;
                        $comment->rating = $request->rating;
                        $comment->comment = $request->comment;
                        $comment->save();

                    } else {
                        toastr()->error('', "Vous pouvez commenter dans les 3 jours !");

                    }

                } else {
                    toastr()->error('', "Vous pouvez commenter après la livraison !");
                }

            }

        }

        return redirect()->back();

    }

}
