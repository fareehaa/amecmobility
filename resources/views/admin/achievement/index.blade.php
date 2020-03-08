@extends('admin.layouts.app')
@section('title','achievement')
@section('main-content')
@include('includes.msg')
<br>
<div class="col-lg-6 col-lg-offset-4"><a href="{{route('achievement.create')}} " class="btn btn-info btn-md">Add achievement</a> <br></div>
<div class="box-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Image</th>
        <th>Location</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
       
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>S.No</td>
        <td>Title</td>
        <td>Image</td>
        <td>Location</td>
        <td>Description</td>
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