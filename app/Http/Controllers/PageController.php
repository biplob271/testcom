<?php
 namespace App\Http\Controllers; use Illuminate\Http\Request; use App\Models\Product; use App\Models\LandingPage; use App\Models\Setting; use App\Models\DeliveryCharge; use Session; class PageController extends Controller { public function landingPage($id) { $dCharge = DeliveryCharge::get()->first(); $Landing = LandingPage::where("\x69\144", $id)->get()->first(); $Setting = Setting::get()->first(); if (session("\x63\x61\x72\x74")) { return view("\141\x64\x6d\x69\x6e\56\154\x61\x6e\x64\x69\156\147\x2e\x6c\x61\156\144\x69\x6e\x67\61", compact("\x4c\x61\x6e\x64\x69\156\x67", "\x53\x65\164\x74\151\156\147", "\x64\x43\x68\141\x72\x67\145")); } else { $book = Product::where("\x69\x64", $Landing->product_id)->get()->first(); $cart = session()->get("\143\x61\162\164", array()); $cart[$id] = array("\x6e\141\155\145" => $book->name, "\x70\x70" => $book->pp, "\161\165\x61\x6e\164\x69\164\x79" => 1, "\160\x72\x69\143\145" => $book->rp, "\151\155\141\147\x65" => $book->image); session()->put("\143\x61\x72\164", $cart); return view("\141\x64\155\x69\x6e\56\x6c\141\156\x64\151\156\147\x2e\x6c\141\156\144\x69\156\147\61", compact("\114\x61\x6e\x64\x69\x6e\147", "\x53\145\x74\x74\151\x6e\x67", "\144\x43\150\141\162\147\x65")); } } }