<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showInsertions($category)
    {
        
        $category = Category::where('name', $category)->firstOrFail();

        $insertions = $category->insertions()->get()->sortByDesc('created_at');
        //$insertions = $category->insertions;
        //dd($insertions);
        return view('category.show-insertions', compact('category', 'insertions'));
    }



    public function index()
    {
        
        $categories= Category::withCount('insertions')->get();
        
       
        return view('category.index', compact('categories'));
    }

    public function show(Category $category)
    { 
        return view('category.show',compact('category'));
    }
}
