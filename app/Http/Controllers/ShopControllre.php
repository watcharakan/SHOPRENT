<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pro;
use Antennaio\Clyde\Facades\ClydeUpload;

class ShopControllre extends Controller
{

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data= Pro::all();
         return view('shop.fix',compact('data'));

    }

     public function skirt()
    {
         $data= Pro::where('type','skirt')->get();;
         return view('shop.skirts',compact('data'));

    }
     public function sk_long()
    {
         $data= Pro::where('subtype','sk_long')->get();;
         return view('shop.skirts',compact('data'));

    }
     public function sk_jeans()
    {
         $data= Pro::where('subtype','sk_jeans')->get();;
         return view('shop.skirts',compact('data'));

    }
      public function sk_short()
    {
         $data= Pro::where('subtype','sk_short')->get();;
         return view('shop.skirts',compact('data'));

    }
      public function sk_buff()
    {
         $data= Pro::where('subtype','sk_buff')->get();;
         return view('shop.skirts',compact('data'));

    }



     public function dresses()
    {
         $data= Pro::where('type','dresses')->get();;
         return view('shop.dresses',compact('data'));

    }
      public function d_evening()
    {
         $data= Pro::where('subtype','d_evening')->get();;
         return view('shop.dresses',compact('data'));

    }
     public function d_chiffon()
    {
         $data= Pro::where('subtype','d_chiffon')->get();;
         return view('shop.dresses',compact('data'));

    }
     public function d_lace()
    {
         $data= Pro::where('subtype','d_lace')->get();;
         return view('shop.dresses',compact('data'));

    }
     public function d_work()
    {
         $data= Pro::where('subtype','d_work')->get();;
         return view('shop.dresses',compact('data'));

    }



     public function pants()
    {
         $data= Pro::where('type','pants')->get();;
         return view('shop.pants',compact('data'));

    }
    public function p_legging()
    {
         $data= Pro::where('subtype','p_legging')->get();;
         return view('shop.pants',compact('data'));
     }
     public function p_skirt()
    {
         $data= Pro::where('subtype','p_skirt')->get();;
         return view('shop.pants',compact('data'));
     }
     public function p_short()
    {
         $data= Pro::where('subtype','p_short')->get();;
         return view('shop.pants',compact('data'));
     }
     public function p_jeans()
    {
         $data= Pro::where('subtype','p_jeans')->get();;
         return view('shop.pants',compact('data'));
     }
     public function p_skin()
    {
         $data= Pro::where('subtype','p_skin')->get();;
         return view('shop.pants',compact('data'));
     }

     
     public function mix()
    {
         $data= Pro::where('type','mix')->get();;
         return view('shop.mix',compact('data'));

    }
     public function bag()
    {
         $data= Pro::where('type','bag')->get();;
         return view('shop.bag',compact('data'));

    }
     public function shoes()
    {
         $data= Pro::where('type','shoes')->get();;
         return view('shop.shoes',compact('data'));

    }
     public function accessories()
    {
         $data= Pro::where('type','accessories')->get();;
         return view('shop.accessories',compact('data'));

    }
    public function fix()
    {   
         $data= Pro::all();
         return view('shop.fix',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $data = Pro::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pro::create($request->all());
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {    
       $data = Pro::findorfail($id);
       return view('shop.single',compact('data'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Pro::destroy($id);
        return redirect('/fix');
    }
    public function upload(Request $request)
{
    if ($request->hasFile('image')) {
        $filename = ClydeUpload::upload($request->file('image'));
    }
}
}
