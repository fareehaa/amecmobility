@extends('admin.layouts.app')
@section('title','Products')
@section('main-content')
@include('includes.msg')
@include('includes.sessionmsg')
<br>
<div class="col-lg-6 col-lg-offset-4"><a href="{{route('products.create')}} " class="btn btn-info btn-md">Add Product</a> <br></div>
<div class="box-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>S.No</th>
        <th>Product Name</th>
        <th>Image</th>
        <th>Category</th>
        <th>Description</th>
        <th>Availability</th>
        <th>GST</th>
        <th>Discount</th>
        <th>Original Amount</th>
        <th>Final Amount</th>
        <th>Edit</th>
        <th>Delete</th>
       
      </tr>
      </thead>
      <tbody>
      @if(count($product)>0)
      @foreach ($product as $prod)
      <tr>
        <td>{{$loop->index + 1}}</td>
        <td> {{$prod->title}}</td>
      <td> <img src="{{asset('storage/products/'.$prod->thumbnail)}}" style="height:100px; width:100px;"/> </td>
        
        <td> @if ($prod->categories()->count()>0)
          @foreach ($prod->categories as $children)
          {{ $children->name }}
          @endforeach
         
          @else
        {{"No Category Found!!"}}
        @endif
        </td>
        <td> {!!$prod->description!!}</td>
        <td> {{$prod->arrivaltype}}</td>
        
        <td> {{$prod->gst}}</td>
        <td> {{$prod->discount}}</td>
        <td> {{$prod->originalAmount}}</td>
        <td> {{$prod->finalAmount}}</td>
        <td><a href="{{route('products.edit',$prod->id)}}"> Edit</a> </td>
        <td>Delete</td>
      </tr>  
      @endforeach
      @endif
     
      </tbody>
      <tfoot>
     <tr></tr>
      </tfoot>
    </table>
  </div>
@endsection