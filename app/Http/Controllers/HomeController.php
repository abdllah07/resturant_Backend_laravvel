<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chefs;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Adres;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



    //  to show the home page without login
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $food = food::all();
        $chefs = chefs::all();
        $user_id = Auth::id();

        $count = cart::where('user_id', $user_id)->count();
        return view('home', compact("food", 'chefs', 'count'));
    }


    public function redirects() // for login as admin or a normal user
    {

        $food = food::all();
        $chefs = chefs::all();
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.adminhome');
        } else {
            $user_id = Auth::id();
            $count = cart::where('user_id', $user_id)->count(); // check the user if have any cart
            return view('home', compact('food', 'chefs', 'count'));
        }
    }


    public function showcart($id)
    {

        $order = order::where('user_id', $id);
        $count = cart::where('user_id', $id)->count();

        $cart = cart::where("user_id", $id)->join('food', 'carts.food_id', '=', 'food.id')->get();
        $cart_id = cart::select('*')->where('user_id', '=', $id)->get();

        $adres = adres::select('*')->where('user_id', $id)->get();

        return view("cart", compact('count', 'cart', 'cart_id', 'order', 'adres'));
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            $food_id = $id;
            $quantity = $request->quantity;
            $cart = new cart;
            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;
            $cart->save();
            return redirect()->back();
        } else {
            return ('\login');
        }
    }

    public function deletecart($id)
    {
        $cart = cart::find($id);
        $cart->delete();
        return redirect()->back();
    }


    public function showadress($id)
    {
        $user = user::find($id);
        return view('showadres', compact('user'));
    }

    public function saveAdress(Request $request, $id)
    {
        $adres = new adres;
        $adres->user_id = $id;
        $adres->user_name = $request->name;
        $adres->buildingN = $request->buildingNo;
        $adres->buildingName = $request->buildingname;
        $adres->cityName = $request->cityName;
        $adres->streetName = $request->streetName;
        $adres->apartmentN = $request->apartmentN;
        $adres->save();


        return redirect()->back();
    }

    public function saveorder($id)
    {
        $order = new order;
        $order->user_id = $id;
        $carts = cart::where("user_id", $id)->join('food', 'carts.food_id', '=', 'food.id')->get();
        $adres = adres::where('user_id', $id)->get();
        $adres_all = "";
        foreach ($adres as $adres) {
            $adres_city = $adres->cityName;
            $adres_building = $adres->buildingName;
            $adres_strret = $adres->streetName;
        }
        foreach ($carts as $cart) {

            $order->price = $cart->price * $cart->quantity;
            $order->quantity = $cart->quantity;
            $order->food_name = $cart->title;
            $order->Adres = $adres_city;
            $order->food_id = $cart->food_id;
            $carts_del = cart::where('food_id', $cart->food_id);
            $carts_del->delete();
            $order->save();

            return redirect()->back();
        }
    }
}
