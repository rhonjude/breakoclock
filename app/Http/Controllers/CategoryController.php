<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=category::paginate(5);
        $role=Auth::user()->role;
        if($role=='1')
        {
            return view('category.index',['category'=>$categories]);
        }
        else
        {
            return view('dashboard');
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories= new category;
        $categories->cname=$request->cname;
        
        $categories->save();
    if($categories){
        return redirect()->back()->with('Category Added Successfully');
    }
     return redirect()->back()->with('Category Add failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories=category::find($id);
        
        if(!$categories){
            return back()->with('Error','Category not found');
        }
        $categories->update($request->all());
        return back()->with('Success','Category updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories=category::find($id);
        
        if(!$categories){
            return back()->eith('Error','Category not found');
        }
        $categories->delete();
        return back()->with('Success','Category deleted successfuly');
    }
}
