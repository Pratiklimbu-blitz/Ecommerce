<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function placeOrder(Request $request)
    {
        $order = new Order();
        $order->full_name = $request->full_name;
        $order->company_name = $request->company_name;
        $order->country = $request->country;
        $order->street_address = $request->street_address;
        $order->town_city = $request->town_city;
        $order->phone = $request->phone;
        $order->email_address = $request->email_address;
        $order->save();

        $cart_item = cart::where('user_id', auth()->user()->id)->get();

        foreach ($cart_item as $item) {
            $order_details = new OrderDetail();
            $order_details->order_id = $order->id;
            $order_details->product_id = $item->product_id;
            $order_details->product_price = $item->product_price;
            $order_details->total_price = $item->total_price;
            $order_details->quantity = $item->quantity;
            $order_details->save();

            $item->delete();
        }

        return redirect('/success');
    }
}
