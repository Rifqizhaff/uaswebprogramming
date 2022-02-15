<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ebook;
use App\Models\Order;
use Session;

class HomeController extends Controller
{
    //
    function index()
    {
        $data = Ebook::all();
        return view('pages.home', ['ebooks'=>$data]);
    }

    function detail($id)
    {
        $data = Ebook::find($id);
        return view('pages.detail', ['ebook'=>$data]);
    }
    function orderbook(Request $req){

        if($req->session()->has('user'))
        {
            $orderr = new Order;
            $orderr->users_id=$req->session()->get('user')['id'];
            $orderr->ebooks_id=$req->ebooks_id;
            $orderr->save();
            return redirect('/home');
        }
        else{
            return redirect('/login');
        }
    }
    static function orderitem()
    {
        $users_id = Session::get('user')['id'];
        return Order::where('users_id', $users_id)->count();
    }

    function orderlist()
    {
        $users_id = Session::get('user')['id'];
        $books = DB::table('orders')
        ->join('ebooks', 'orders.ebooks_id','=','ebooks.id')
        ->where('orders.users_id',$users_id)
        ->select('ebooks.*', 'orders.id as orders_id')
        ->get();

        return view('pages.orderlist', ['books'=>$books]);
    }

    function removeorder($id)
    {
        Order::destroy($id);
        return redirect('order_list');
    }
}
