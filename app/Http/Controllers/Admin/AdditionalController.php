<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class AdditionalController extends Controller
{
    //


    // Brand RELATED ROUTE START  
    public function brand()
    {
    $getData =Brand::orderBy('id', 'desc')->get();
    
        return view('admin.product.brand', compact('getData'));
    }


    public function  brandAdd(Request $request)
    {
     
     if($request['image']) {
         //Show File Name
         $image = "images/".pathinfo($request['image']->getClientOriginalName(), PATHINFO_FILENAME).'-'.time().'.'.$request['image']->getClientOriginalExtension();
         //Store File in Directory
         $request['image']->move('uploads/images/', $image);
     } else {
         $image = $request->image;
     }
     
     $Brand = new Brand();
     $Brand->name = $request->brand_name;
     $Brand->url = $request->brand_url;
     $Brand->image =  $image;
     $Brand->save();
     return redirect()->back()->with('success', 'Brand Added Successfully');
     
     }
 
 
     public function  brandEdit($id)
     {
     
         $cat =Brand::where('id', $id)->get()->first();
         return view('admin.product.edit-brand', compact('cat'));
      }
 
     public function  brandUpdate(Request $request)
     {
      
      if($request['image']) {
          //Show File Name
          $image = "images/".pathinfo($request['image']->getClientOriginalName(), PATHINFO_FILENAME).'-'.time().'.'.$request['image']->getClientOriginalExtension();
          //Store File in Directory
          $request['image']->move('uploads/images/', $image);
      } else {
          $image = $request->oldimage;
      }
      
      $Brand = Brand::find($request->id);
      $Brand->name = $request->brand_name;
      $Brand->url = $request->brand_url;
      $Brand->image =  $image;
      $Brand->save();
      return redirect()->back()->with('success', 'Brand Updated Successfully');
      
      }
  
 
 
 
     public function brandDestroy($id){
         $Brand = Brand::find($id);
         $Brand->delete();
         return redirect()->back()->with('delete', 'Deleted Successfully');
    }
 
 // BRAND RELATED ROUTE END



}
