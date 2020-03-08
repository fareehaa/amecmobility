@extends('admin.layouts.app')
@section('title','Category')
@section('main-content')
   @include('includes.sessionmsg')
   @include('includes.msg')
   <br>
<div class="col-lg-6 col-lg-offset-4"><a href="{{route('category.create')}} " class="btn btn-info btn-md">Add Category</a> <br></div>
 
<div class="box-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>S.No</th>
        <th>Category Name</th>
        <th>Category Description</th>
        <th>Parent Category</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Active/Deactive</th>
      </tr>
      </thead>
      <tbody>
     @if(count($datas)>0)
    @foreach ($datas as $data)
    <tr>
      <td>{{$loop->index + 1}} </td>
      <td>{{$data->name}}</td>
      <td>{{$data->description}}</td>
      <td>
      @if ($data->childrens()->count()>0)
       @foreach ($data->childrens as $children)
       {{ $children->name }}
       @endforeach
       @else
       {{ 'Parent Category'}}   
      @endif
    </td>
  <td> <a href="{{route('category.edit',$data->id)}}" class="btn btn-md btn-info">Edit</a> </td>
      <td>  
      <form action="{{route('category.destroy',$data->id)}}" method="POST">
      {{csrf_field()}}
      {{method_field("DELETE")}}
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      </td>
      <td>Active/Deactive</td>
    </tr> 
    @endforeach
    @else
    <tr>
      <td>No Data Found!!</td>
    </tr>
     @endif
     
      </tbody>
      <tfoot>
     <tr></tr>
      </tfoot>
    </table>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-4">
      {{$datas->links()}}
    </div>
  </div>
@endsection