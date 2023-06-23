<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chefs;
use App\Models\Order;

class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view("admin.user", compact("data"));
    }


    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {
        $food = food::all();
        return view("admin.foodmenu", compact("food"));
    }

    public function uploadfood(Request $request)
    {
        $data = new food;
        // give to image a unique name and saved in the folder foodimage in the public folder
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        // add to database
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function deletefood($id)
    {
        $food = food::find($id);
        $food->delete();
        return redirect()->back();
    }

    public function updateview($id)
    {
        $food = food::find($id);

        return view('admin.updateview', compact('food'));
    }

    public function foodupdate(Request $request, $id)
    {
        $food = food::find($id);
        // give to image a unique name and saved in the folder foodimage in the public folder
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        // add to database
        $food->image = $imagename;
        $food->title = $request->title;
        $food->price = $request->price;
        $food->description = $request->description;
        $food->save();
        return redirect()->back();
    }

    public function makeReservation(Request $request)
    {
        $rev = new reservation;
        $rev->name = $request->name;
        $rev->email = $request->email;
        $rev->phone = $request->phone;
        $rev->guest = $request->guest;
        $rev->date = $request->date;
        $rev->time = $request->time;
        $rev->message = $request->message;

        $rev->save();
        return redirect()->back();
    }

    public function reservationPage()
    {
        $rev = reservation::all();
        return view('admin.reservationPage', compact('rev'));
    }


    public function chefsPage()
    {
        $chefs = chefs::all();
        return view('admin.chefsPage', compact('chefs'));
    }
    public function uploadchefs(Request $request)
    {
        $chefs = new chefs;
        // give to image a unique name and saved in the folder foodimage in the public folder
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefsimage', $imagename);

        $chefs->image = $imagename;
        $chefs->name = $request->name;
        $chefs->gob = $request->job;

        $chefs->save();
        return redirect()->back();
    }

    public function deletechefs($id)
    {
        $chefs = chefs::find($id);
        $chefs->delete();
        return redirect()->back();
    }


    public function updatechefspage($id)
    {
        $chefs = chefs::find($id);
        return view("admin.updatechefspage", compact('chefs'));
    }

    public function updatechefs(Request $request, $id)
    {
        $chef = chefs::find($id);
        $image = $request->image;
        // give to image a unique name and saved in the folder foodimage in the public folder
        if ($image) {
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('chefsimage', $imagename);
            $chef->name = $request->name;
        }

        $chef->gob = $request->job;
        $chef->image = $imagename;
        $chef->save();
        return redirect()->back();
    }




    public function ordersPage()
    {

        $order = order::all();
        $user = user::all();

        foreach ($order as $order) {
            $order_id = $order->user_id;
        }
        foreach ($user as $user) {
            $user_id = $user->id;
            if ($user_id == $order_id) {
                $user_name = user::find($order_id);
            }
        }
        $order = order::all();
        return view('admin.ordersPage', compact('order', 'user_name'));
    }


    public function deleteorder($id)
    {
        $order = order::find($id);
        $order->delete();
        return redirect()->back();
    }
}
