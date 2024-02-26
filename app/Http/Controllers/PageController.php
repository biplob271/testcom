<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\LandingPage;
use App\Models\Setting;
use App\Models\DeliveryCharge;
use Session;
class PageController extends Controller
{
    //


    public function landingPage($id)
    {  
        $dCharge=DeliveryCharge::get()->first();
        //  $product=Category::find(13);
       // return  $product;
        $Landing=LandingPage::where('id', $id)->get()->first();
       //dd($Landing);
      
        
        //dd($book);
        $Setting=Setting::get()->first();
      
        if(session('cart')){
            
            //dd(session('cart'));
            return view('admin.landing.landing1', compact('Landing','Setting','dCharge'));
        }else{
            $book=Product::where('id', $Landing->product_id)->get()->first();
            $cart = session()->get('cart', []);
        
                $cart[$id] = [
                    "name" => $book->name,
                    "pp" => $book->pp,
                    "quantity" => 1,
                    "price" => $book->rp,
                    "image" => $book->image
                ];
        
            session()->put('cart', $cart);
    
    
    
            return view('admin.landing.landing1', compact('Landing','Setting','dCharge'));


        }

       
    }










}
