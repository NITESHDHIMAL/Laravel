<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class myController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        return view('firstpage');
    }

 
  public function showproductform(){
         return view ("addproduct");  
     }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $image=null;
          if ($request->hasFile('image')){
            $file=$request->file('image');            // read file property
            $image=mt_rand(10001,9999999).'_'.$file->getClientOriginalName();    
            $file->move('uploads/products/',$image); 
             }
                     //move to the image folder in public file
            Product::create([       //product=model name   create= data insert
                'product_name'=>$request->get('pname'),
                'product_price'=>$request->get('price'),
                'product_quantity'=>$request->get('quantity'),
                'product_description'=>$request->get('description'),
                'product_image'=>$image 
            ]);
            $request-> session()->flash('msg','Product has been added successfully'); //  if we cna refresh the page the msg will be atutomatically in normal form
            return redirect()->back();        

         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function show()
    {
        //
        $showdata=Product::orderBy('id','desc')->get();
        return view('showproduct',['showdata'=>$showdata]);
    }

       public function homepage()
    {
        //
        $show=Product::orderBy('id','desc')->get();
        return view('homepage',['show'=>$show]);        //array=To show a multiple value that is called                                                            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $product=Product::find($id);
         return view('edit',compact('product'));
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
    public function destroy(Request $request,$id)
    {
       $product=Product::find($id);
       if ($product->product_image) {
        unlink('uploads/products/'.$product->product_image);   //delete a image from folder
       
        }
          $product->delete();
          $request->session()->flash('msg','product has been deleted successfully');
          return redirect()->back();    
 
    }
}
