<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    
    public function show(){
        $categories = Category::all();
        return view ('admin.category.show', compact('categories'));
    }

    public function addCategory(){
        return view('admin.category.addCategory');
    }

    public function storeCategory(Request $Request){
        $name = $request->name;
        $description = $request->description;
        $number = $request->number;
        $date = $request->date;

        $category = new category();
        $category->name = $name;
        $category->description = $description;
        $category->number = $number;
        $category->date = $date;
        $category->save();
    }
}
