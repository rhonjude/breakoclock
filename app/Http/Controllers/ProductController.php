<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\category;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  // $catlist=category::select('id','cname')->get();
        $product=DB::table('products')
        ->join('categories','categories.id','=','products.cid')
        ->select('products.*','categories.cname')
        ->get();
        //$product=product::paginate(5);
        $role=Auth::user()->role;

        if($role=='1')
        {
            return view('products.index',['product'=>$product]);
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
        $catlist=category::select('id')->get();
        $product= new product;
        $product->product_name=$request->product_name;
        $product->cid=$request->cid;
        $product->price=$request->price;
        $product->description=$request->description;
            
        if($request->hasfile('pimage')){
            $file=$request->file('pimage');
            $extension=$file->getClientOriginalExtension();//getting image extension
            $filename=time() . '.' . $extension;
            $file->move('uploads/product/',$filename);
            $product->pimage=$filename;

        }

        else{
            return $request;
            $product->pimage= '';
        }


        $product->save();
    if($product){
        return redirect()->back()->with('product Added Successfully');
    }
     return redirect()->back()->with('product Add failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $product=product::find($id);
        
        if(!$product){
            return back()->with('Error','Product not found');
        }
        $product->update($request->all());
        return back()->with('Success','Product updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=product::find($id);
        
        if(!$product){
            return back()->eith('Error','Product not found');
        }
        $product->delete();
        return back()->with('Success','Product deleted successfuly');
    }
}
