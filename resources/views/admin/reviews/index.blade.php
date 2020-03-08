@extends('admin.layouts.app')
@section('title','Products')
@section('main-content')
@include('includes.msg')
<br>
<div class="col-lg-6 col-lg-offset-4"><a href="{{route('review.create')}} " class="btn btn-info btn-md">Add Review</a> <br></div>
<div class="box-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>S.No</th>
        <th> Review By (username)</th>
        <th>Image</th>
        <th>Product</th>
        <th>Review Description</th>
        <th>Review Stars</th>
        <th>Edit</th>
        <th>Delete</th>
       
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>S.No</td>
        <td> Review By (username)</td>
        <td>Image</td>
        <td>Product</td>
        <td>Review Description</td>
        <td>Review Stars</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>
     
      </tbody>
      <tfoot>
     <tr></tr>
      </tfoot>
    </table>
  </div>
@endsection