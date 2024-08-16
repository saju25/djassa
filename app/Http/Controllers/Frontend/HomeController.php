<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\RefundMony;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    // for home page
    public function index()
    {
        Artisan::call('subscriptions:update');
        Artisan::call('schedule:run');
        $latestAdd = Post::take(6)->latest()->get();

        return view('homepage', compact('latestAdd'));
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
        $per_page = $request->per_page ?: 15;
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

    // all candidates list
    public function allCandidates(Request $request)
    {
        $keywords = $request->keyword;
        $candidatesQuery = User::query()->orderByRaw("CASE WHEN bost_profile = 1 THEN 0 ELSE 1 END")->orderBy('bost_profile', 'asc')->inRandomOrder();

        if ($keywords) {
            $keywords = '%' . strtolower($keywords) . '%';
            $candidatesQuery->whereRaw('LOWER(fullname) like ?', [$keywords])
                ->orWhereRaw('LOWER(username) like ?', [$keywords])
                ->orWhereRaw('LOWER(name) like ?', [$keywords])
                ->orWhereRaw('LOWER(job_category) like ?', [$keywords])
                ->orWhereRaw('LOWER(tag) like ?', [$keywords]);
        }
        $candidates = $candidatesQuery->paginate(12);
        return view('all-candidates', compact('candidates'));
    }

    // for policy page
    public function policy()
    {
        return view('policy-and-confidentiality');
    }
    // for refund money
    public function refundMoney(Request $request)
    {
        $user = Auth::user();

        $refund = new RefundMony;
        $refund->buyer_id = $user->id;
        $refund->amount = $request->amount;
        $refund->payment_type = $request->type;
        $refund->phone = $request->phone;
        $refund->bank_name = $request->bank_name;
        $refund->account_name = $request->account_name;
        $refund->account_number = $request->account_number;
        $refund->routing_number = $request->routing_number;
        $refund->type = 'buyer';
        $refund->status = 0;
        $refund->save();

        toastr()->success('', 'Votre demande de remboursement a été soumise avec succès.!');
        Session::forget('buyer_info');
        return redirect()->to('/');
    }

}
