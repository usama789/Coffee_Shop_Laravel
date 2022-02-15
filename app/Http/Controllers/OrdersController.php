<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use App\Models\Roles;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    public function addOrder(Request $request){             //Placing New Order
        $waiterId= Roles::find($request->waiterId);
        if($waiterId){
        $order = new Orders();
        $order->waiterId= $request->waiterId;
        $order->item=$request->item;
        $order->quantity=$request->quantity;
        $order->save();
        return redirect('list');
        return "Order Save Successfully";
        }
        else{
            return "Enter Valid Waiter Id";
        }
        
    }
    public function addPayment(Request $request){    //Saving payment of order
        $order = Orders::find($request->id);
        if($order){
            $order->price = $request->price;
            $order->save();
            return redirect('list');
            return "Payment has been Added Successfully";
        }
        else{
            return "Sorry, Requested Order History Not Found";
        }
    }
    public function GetOrders(Request $request){
        $order = Orders::all();
        return view('list',['members' => $order]);
        // return response()->json($order);
    }
    public function editStatus(Request $request,$id){     //edit status of order
        $order = Orders::find($id);
        if($order){
            $order->status = "Ready";
            $order->save();
            return redirect('list');
            return "Your Order Status has been Saved!";
        }
        else{
            return "Sorry, Requested Order History Not Found";
        }
    }
    public function getOrderPayment($id){
        $order = Orders::find($id);
        return view('payment',['order'=> $order]);

    }
}
