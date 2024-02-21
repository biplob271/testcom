<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function index(){
        $Setting=Setting::get()->first();
        $Post=Post::get()->first();
        $Category=Category::get();
        $News=Post::whereRaw('id % 2 = 0')->orderBy('id', 'desc')->limit(3)->get();
        $News2=Post::whereRaw('id % 2 != 0')->orderBy('id', 'desc')->limit(3)->get();
        return view ("frontend.pages.index", compact('Setting','Category','Post','News','News2'));

    }
    public function singlePage($id){
        $Setting=Setting::get()->first();
        $Post=Post::get()->first();
        $Category=Category::get();
        $News=Post::limit(7)->get();
        $NewsSingle=Post::where('id', $id)->get()->first();
        $CatNews=Post::where('category', $NewsSingle->category)->orderBy('id', 'desc')->get();
        return view ("frontend.pages.single", compact('Setting','Category','Post','News','NewsSingle','CatNews'));

    }
    public function archivePage($id){
        $News=Post::limit(7)->get();
        $News1=Post::where('category', $id)->get();
        $News2=Post::whereRaw('id % 2 != 0')->orderBy('id', 'desc')->limit(3)->get();
        return view ("frontend.pages.archive", compact('News','News1','News2','id'));

    }

    public function newComment(Request $request){
    $Comment = new Comment();
    $Comment->comment = $request->comment;
    $Comment->name = $request->author;
    $Comment->email = $request->email;
    $Comment->website = $request->url;
  

     $Comment->save();
    return redirect()->back()->with('success', 'Reply Added Successfully');

    }






}
