<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;

class AddController extends Controller
{
    public function addPostDetails($id, $slug)
    {
        // Fetch the post by ID and slug
        $product = Post::where('id', $id)
            ->where('slug', $slug)
            ->firstOrFail();

        // Fetch related posts based on the category of the $add post
        $related_c_P = Post::where('add_category', $product->add_category)->get();
        $review = Comment::where('post_id', $id)->get();
        $rationvalue = round($review->avg('rating'));
        $reviewCount = $review->count();

        // dd($reviewCount);
        // Return the view and pass both the specific post and related posts
        return view('user.profile.add-detail', compact('product', 'related_c_P', 'review', 'rationvalue', 'reviewCount'));
    }
}
