<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\SMS;
use App\Models\Slider;
use App\Models\Product;
use App\Models\PaymentGty;
use Session;
class OrderController extends Controller
{
    public function index($id)
    {   
    
    }
    
     public function invoice($id)
    {   $order =Order::where('order_number', $id)->first();
        $pGty =PaymentGty::get()->first();
        $items = OrderItem::where('order_id', $id)->get();
     
       return view('frontend.pages.order-track', compact('order','items','id','pGty'));
    }

}
