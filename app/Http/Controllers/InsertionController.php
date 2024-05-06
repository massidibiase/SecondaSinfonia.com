<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Insertion;
use Illuminate\Http\Request;

class InsertionController extends Controller
{
    public function create()

    
      { 
      
        return view('insertion.create');
    }

   

    public function index()
    {
        
        $insertions= Insertion::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(10);
        //$insertions = Insertion::orderBy('created_at','desc')->paginate(10);
        $categories = Category::all();
       
        return view('insertion.index', compact('insertions', 'categories'));
    }


       public function show(Insertion $insertion)
        { 
            return view('insertion.show',compact('insertion'));
        }
}
