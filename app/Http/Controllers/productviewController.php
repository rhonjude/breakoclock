<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productview;
use App\Models\Product;
use App\Models\category;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Salesdone;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class productviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catlist=DB::table('categories')
        ->join('products','products.cid','categories.id')->first();
        $product=product::paginate(5);
        $role=Auth::user()->role;
        if($role=='1')
        {
            return view('admin.dashboard');
        }
        else
        {
            return view('productview.index',['product'=>$product],compact('catlist'));

        }


    }
    function addToCart(Request $req)
    {   
        $user=$req->user();
        $id=$user->id;
        
            if($user)
            {
            $cart=new Cart;
            $cart->user_id=$id;
            $cart->product_id=$req->product_id;
            $cart->quantity=$req->input('quantity');
            $cart->save();
            return redirect('/productviews');
            }   
            
            else 
            {
                return redirect('/login');
            }
       
        
    }

    static function cartItem()
    {
        $user=auth()->user();
        $userId=$user->id;
        return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {   $user=auth()->user();
        $userId=$user->id;
        $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

     function orderNow()
    {
        $user=auth()->user();
        $userId=$user->id;
      $total= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum(DB::raw('products.price * cart.quantity'));
    
        return view('ordernow',['total' => $total]);
        


    }
    function orderPlace(Request $req)
    {
        
        $user=auth()->user();
        $userId=$user->id;
         $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->user_id=$cart['user_id'];
            $order->quantity=$cart['quantity'];
            $order->payment_status="pending";
            $order->address=$req->address;

            $order->save();
            Cart::where('user_id',$userId)->delete();

        }
         $req->input();
        return view('ordersuccess');
         // return redirect('/productviews');
    }

    function myOrders()
    {
        $user=auth()->user();
        $userId=$user->id;
        $orders= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        $total= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->sum(DB::raw('products.price * orders.quantity'));

        
        $role=$user->role;
        if($role==0)
        {
            return view('myorders',['orders'=>$orders],['total'=>$total]);
        }
        else
        {
            return redirect('/login');
        }

        
    }
    function orderViewAdmin()
    {
       
        $orders=DB::table('orders')
        ->join('users','orders.user_id','=','users.id')
        ->join('products','products.id','=','orders.product_id')
        ->where('orders.payment_status','=','pending')
        ->get();
       
       

        $user=auth()->user();
        $role=$user->role;
        if($role==1)
        {
            return view('orderviewadmin',['orders'=>$orders]);
        }
        else
        {
            return redirect('/dashboard');
        }
    }
    function paymentStatus($id)
    {
        
        DB::table('orders')
              ->where('orders.id', $id)
              ->update(['payment_status' => 'paid']);
              
              return redirect('/orderviewadmin');

    }
    function orderCancel($id)
    {
        DB::table('orders')
        ->where('orders.id',$id)
        ->delete();
        return redirect('/orderviewadmin');
    }
    
    function completedOrders()
    {
        $orders=DB::table('users')
        ->join('orders','orders.user_id','=','users.id')
        ->join('products','products.id','=','orders.product_id')
        ->where('orders.payment_status','=','paid')
        ->get();
       
        $total= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.payment_status','=','paid')
        ->sum(DB::raw('products.price * orders.quantity'));

     
        

        $user=auth()->user();
        $role=$user->role;
        if($role==1)
        {
            return view('completedorders',['orders'=>$orders],['total'=>$total]);
        }
        else
        {
            return redirect('/dashboard');
        }
    }
    
    
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
