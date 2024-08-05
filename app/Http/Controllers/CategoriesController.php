<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('dashboard.bashboard-tables', compact('categories'));
    }

    public function add(){
        $category = new Category();
        return view('dashboard.category_edit', compact('category'));
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('categories')->with('success', 'Project created successfully');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('dashboard.category_edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('categories')->with('success', 'Category updated successfully');
    }
}
