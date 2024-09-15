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

        $daysPassed = Carbon::now()->diffInDays($order->updated_at);

        // dd($order->status);
        if (empty($order->status)) {
            toastr()->error('', 'You can comment after the buy!');
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
                    toastr()->error('', 'You can comment within 3 days!');

                }

            } else {
                toastr()->error('', 'You can comment after the delivery!');
            }

        }

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
