<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        // dd($user->sub_id);
        if ($user->sub_id == null) {
            toastr()->success('', 'Please Update subscription!');
            return redirect(route('user.sub'));

        } else {
            return view('user.profile.new-add-post');

        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|max:255',
            'description' => 'nullable|string',
            'best_price' => 'required|numeric',
            'discounted_price' => 'required|numeric',
            'color' => 'nullable|json',
            'weight' => 'nullable|json',
            'size' => 'nullable|json',
            'add_cate' => 'required|string|max:255',
            'sub_cate' => 'required|string|max:255',
            'product_img.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'city' => 'required|string|max:255',
            'number' => 'required|numeric',
        ]);

        $user = Auth::user();

        // $enddate = Carbon::parse($hireCount->sub_date);

        // $enddate = $enddate->addDays(30);

        // $trial_end = Carbon::parse($hireCount->created_at)->addDays(30);

        // if ($hireCount->sub_id == null) {
        //     # code...
        //     if ($trial_end->lt(Carbon::today())) {
        //         # code...
        //         toastr()->success('', 'Please Update subscription to hire!');
        //         return redirect(route('user.sub'));
        //     }
        // } elseif ($hireCount->sub_id == 1) {
        //     # code...
        //     if ($enddate->lt(Carbon::today())) {
        //         # code...
        //         toastr()->success('', 'Please Update subscription to hire!');
        //         return redirect(route('user.sub'));
        //     }
        //     if ($hireCount->hire_count > 29) {
        //         # code...
        //         toastr()->success('', 'Please Update subscription to hire!');
        //         return redirect(route('user.sub'));
        //     }
        // } elseif ($hireCount->sub_id == 2) {
        //     # code...
        //     if ($enddate->lt(Carbon::today())) {
        //         # code...
        //         toastr()->success('', 'Please Update subscription to hire!');
        //         return redirect(route('user.sub'));
        //     }
        // }

// Store image files
        $imagePaths = [];
        if ($request->hasFile('product_img')) {
            foreach ($request->file('product_img') as $image) {
                // Store the image in the public disk
                $path = $image->store('images', 'public');
                // Get the URL to the stored image
                $imagePaths[] = Storage::url($path);
            }
        }

// Create a new product record
        $product = new Post();
        $product->user_id = $user->id;
        $product->name = $request->input('name');
        $product->sku = $request->input('sku');
        $product->description = $request->input('description');
        $product->best_price = $request->input('best_price');
        $product->discounted_price = $request->input('discounted_price');
        $product->color = $request->input('color');
        $product->weight = $request->input('weight');
        $product->size = $request->input('size');
        $product->add_category = $request->input('add_cate');
        $product->sub_cate = $request->input('sub_cate');
        $product->img_path = json_encode($imagePaths); // Store image paths in JSON format
        $product->city = $request->input('city');
        $product->number = $request->input('number');

        $product->save();

        toastr()->success('', 'Your product add product  successfully  dones!');
        return redirect()->back();
    }
    public function show($id)
    {
        $product = Post::where('id', $id)->first();
        return view('user.profile.edit-add-post', compact('product'));

    }
    public function update(Request $request, $id)
    {
        // Retrieve the existing product record
        $product = Post::findOrFail($id);

        // Initialize an array to hold image paths
        $imagePaths = [];

        // Check if new images are uploaded
        if ($request->hasFile('product_img')) {
            foreach ($request->file('product_img') as $image) {
                // Store the image in the public disk
                $path = $image->store('images', 'public');
                // Get the URL to the stored image
                $imagePaths[] = Storage::url($path);
            }
        }

        // Update the product details
        if ($request->input('user_id')) {
            $product->user_id = $request->input('user_id');
        }
        if ($request->input('name')) {
            $product->name = $request->input('name');
        }
        if ($request->input('sku')) {
            $product->sku = $request->input('sku');
        }
        if ($request->input('description')) {
            $product->description = $request->input('description');
        }
        if ($request->input('best_price')) {
            $product->best_price = $request->input('best_price');
        }
        if ($request->input('discounted_price')) {
            $product->discounted_price = $request->input('discounted_price');
        }
        if ($request->input('color')) {
            $product->color = $request->input('color');
        }
        if ($request->input('weight')) {
            $product->weight = $request->input('weight');
        }
        if ($request->input('size')) {
            $product->size = $request->input('size');
        }
        if ($request->input('add_cate')) {
            $product->add_category = $request->input('add_cate');
        }
        if ($request->input('sub_cate')) {
            $product->sub_cate = $request->input('sub_cate');
        }

        // If there are new images, update the image paths; otherwise, retain the old paths
        if (!empty($imagePaths)) {
            $product->img_path = json_encode($imagePaths);
        }

        $product->city = $request->input('city');
        $product->number = $request->input('number');

        // Save the updated record
        $product->save();

        toastr()->success('', 'Product updated successfully!');
        return redirect()->route('profile.add');
    }

    public function destroy($id)
    {
        // Find the user by ID
        $product = Post::findOrFail($id);

        if ($product) {
            $product->delete(); // Delete the user
            toastr()->success('', 'Product Delete successfully!');
            return redirect()->route('profile.add');

        } else {
            toastr()->success('', 'Product not found!');
            return redirect()->route('profile.add');

        }
    }

}
