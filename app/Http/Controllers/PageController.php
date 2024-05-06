<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Insertion;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function home () {
        //$insertions = Insertion::where('is_accepted', true)->take(6)->get()->sortByDesc('updated_at');
        $insertions = Insertion::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
       
        $categories = Category::all();
        return view('welcome', compact('insertions','categories'));
    }

    public function searchAnnuncements (Request $request){
        $searchTerm = $request->searched;
        $insertions = Insertion::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('insertion.index', compact('insertions', 'searchTerm'));
    }

    public function setLanguage($lang){
        session()->put('locale',$lang);
       
        return redirect()->back();
        
    }
}
