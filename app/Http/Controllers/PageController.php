<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\LandingPage;
use App\Models\Setting;
class PageController extends Controller
{
    //


    public function landingPage($id)
    {  
        
        //  $product=Category::find(13);
       // return  $product;
        $Landing=LandingPage::where('id', $id)->get()->first();
       //dd($Landing);
        $product=Product::where('id', $Landing->product_id)->get()->first();
        $Setting=Setting::get()->first();
        return view('admin.landing.landing1', compact('product','Landing','Setting'));
    }










}
