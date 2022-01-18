<?php

namespace App\Http\Controllers\cms;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()
            ->paginate(5);
            
        return view('cms.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
        // validasi inputan user
        $request->validate([
            'title' =>'required|unique:categories,title'
       ]);

        // simpan data ke database
        $category->create([
            'title'=> Str::title($request->title),
            'slug'=> Str::slug($request->title)
       ]);

        // redirect ke halaman index category
        return redirect()->route('category.index')
            ->with('success', 'Category has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('cms.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // validasi inputan user
        $request->validate([
            'title' => 'required|unique:categories,title'
        ]);

        // simpan data ke database
        $category->update([
            'title' => Str::title($request->title),
            'slug' => Str::slug($request->title)
        ]);

        // redirect

        return redirect()->route('category.index')
            ->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')
            ->with('success', 'Category has been delated');
    }
}
