<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\CompanyInFo;
use App\Models\Post;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // for home page
    public function index()
    {
        $user = Auth::user();
        Artisan::call('subscriptions:update');
        Artisan::call('schedule:run');
        $latestAdd = Post::take(12)->latest()->get();
        $banners = Banner::get();

        return view('homepage', compact('latestAdd', 'banners'));
    }

    //candidate profile details
    public function candidateProfile($id)
    {
        $user = User::whereId($id)->first();
        $socialMedia = SocialMedia::first();
        return view('user.profile.candidate-detail', compact('user', 'socialMedia'));
    }

    //find jobs
    public function findProduct(Request $request)
    {
        // dd($request->all());
        $keywords = $request->keyword;
        $location = $request->location;
        $add_category = $request->add_category;
        $sub_cate = $request->sub_cate;
        $per_page = $request->per_page ?: 16;
        // dd($add_category);

        $products = Post::query()->with('user')->latest('id');

        if ($keywords || $location || $add_category || $sub_cate) {
            $products->where(function ($query) use ($keywords, $location, $add_category, $sub_cate) {
                if ($keywords) {
                    $query->where('name', 'like', '%' . $keywords . '%');
                }
                if ($location) {
                    $query->where('city', 'like', '%' . $location . '%');

                }

                if ($add_category) {
                    $query->where('add_category', 'like', '%' . $add_category . '%');

                }
                if ($sub_cate) {
                    $query->where('sub_cate', 'like', '%' . $sub_cate . '%');

                }

            });
        }

        $products = $products->paginate($per_page);

        return view('all-product', compact('products'));
    }

    // for policy page
    public function policy()
    {
        return view('policy-and-confidentiality');
    }
    public function about()
    {
        return view('about-us');
    }
    public function frontView(Request $request)
    {
        $keywords = $request->keyword;
        $name = $request->name;
        $per_page = $request->per_page ?: 16;

        // Start with the query builder, not the collection
        $comIns = CompanyInFo::query();

        if ($keywords) {
            $comIns->where('name', 'like', '%' . $keywords . '%');
        }

        // Paginate before fetching results
        $comIns = $comIns->paginate($per_page);

        return view('compay-information', compact('comIns'));
    }

}
