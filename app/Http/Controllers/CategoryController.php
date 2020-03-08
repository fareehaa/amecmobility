<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas =  Category::paginate(10);
        return view('admin.category.index',compact('datas'));
       
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas =  Category::all();
        return view('admin.category.add',compact('datas'));
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
            "name"=>"required|min:5",
            
            "description"=>"required",
        ]);
        $datas = new Category;
        $datas->name = $request->name;
        $datas->description = $request->description;
        $datas->save();
        $datas->childrens()->attach($request->parent_id);
        return redirect(route('category.index'))->with('message','Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
       $id =$category->id;
       $datas = Category::all();
       $cats = Category::find($id);
        return view('admin.category.edit',compact('cats','datas'))->with('message','Category Updated Successfully');
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
       // dd($request->all());
        $id =$category->id;
      $this->validate($request,[
         "name"=>"required|min:5",
         
         "description"=>"required",
     ]);
     $datas =  Category::find($id);
     $datas->name = $request->name;
     $datas->description = $request->description;
     $datas->save();
     $datas->childrens()->sync($request->parent_id);
     return redirect(route('category.index'))->with('message','Category Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        return 'yes';
    }
}
