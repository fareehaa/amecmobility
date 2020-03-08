<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $category = Category::all();
        return view('admin.products.index',compact('product','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Category::all();
        return view('admin.products.add',compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $this->validate($request,[
        'title'=>'required',
        'description'=>'required',
        'thumbnail'=>'required|image|mimes:jpeg,png,bmp,jpg',
        'gst'=>'required',
        'discount'=>'required',
        
        'arrivaltype'=>'required',
        'originalAmount'=>'required',
        'finalAmount'=>'required',
        
       ]);
       if($request->hasFile('thumbnail')){
          $img = $request->thumbnail->getClientOriginalName();
         
          $image = $request->title."-".$img;
          
          $request->thumbnail->storeAs('public/products',$image);
         
       }
       $data = new Product;
       $data->title = $request->title;
       $data->description = $request->description;
       $data->thumbnail = $image;
       $data->gst = $request->gst;
       $data->discount = $request->discount;
      
       $data->arrivaltype = $request->arrivaltype;
       $data->originalAmount = $request->originalAmount;
       $data->finalAmount = $request->finalAmount;
       $data->save();
       $data->categories()->sync($request->category_id);
       return redirect(route('products.index'))->with('message','Product create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $id =  $product->id;
        $data = Product::find($id);
        $cat = Category::all();
        return view('admin.products.edit' ,compact('data','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $id = $product->id;
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'thumbnail'=>'required|image|mimes:jpeg,png,bmp,jpg',
            'gst'=>'required',
            'discount'=>'required',
            
            'arrivaltype'=>'required',
            'originalAmount'=>'required',
            'finalAmount'=>'required',
            
           ]);
           if($request->hasFile('thumbnail')){
              $img = $request->thumbnail->getClientOriginalName();
             
              $image = $request->title."-".$img;
              
              $request->thumbnail->storeAs('public/products',$image);
             
           }
           $data = Product::find($id);
           $data->title = $request->title;
           $data->description = $request->description;
           $data->thumbnail = $image;
           $data->gst = $request->gst;
           $data->discount = $request->discount;
          
           $data->arrivaltype = $request->arrivaltype;
           $data->originalAmount = $request->originalAmount;
           $data->finalAmount = $request->finalAmount;
           $data->save();
           $data->categories()->sync($request->category_id);
           return redirect(route('products.index'))->with('message','Product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
