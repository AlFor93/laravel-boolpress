<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Author;
use App\Post;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {

    }

    public function getPostsByCategory($name) {

      $category = Category::where('name' , $name)->first();

      return view('pages.category_posts', compact('category'));

      // dd($category);
      // dd($name);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
