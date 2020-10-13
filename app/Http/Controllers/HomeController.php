<?php

namespace App\Http\Controllers;

use App\Favorite;
use App\Shop;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeController extends Controller
{

    use SoftDeletes;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $favorites = Favorite::where('user_id', Auth::id())->latest()->get();
        foreach ($favorites as $key => $favorite){
            $relateShops[] = Shop::where('id', $favorite->shop_id)->first();
        }
        return view('home')->with(['relateShops'=>$relateShops]);
    }

    public function delete()
    {
        $user_id = Auth::id();
        User::destroy($user_id);

        return redirect('login');
    }

}
