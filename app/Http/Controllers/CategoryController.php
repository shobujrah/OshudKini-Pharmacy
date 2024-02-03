<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){

        $categories=Category::all();
        return view('backend.pages.category.list', compact('categories'));
    }

    public function create (){
        return view('backend.pages.category.create');
    }

    public function store (Request $request){

        // dd($request->all());

        $request->validate([
            'category_name'=>'required'
        ]);


        Category::create([
            'name'=> $request->category_name,
            'description'=> $request->description
        ]);

       return redirect()->route('category.list')->with('msg', 'Category Create Succesfull.');
     }

}
