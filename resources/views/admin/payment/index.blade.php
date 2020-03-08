@extends('admin.layouts.app')
@section('title','Cards')
@section('main-content')
<a href="{{route('category.create')}} " class="btn btn-info btn-md">Add Card</a>
<div class="box-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>S.No</th>
        <th>Category Name</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Active/Deactive</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>S.No</td>
        <td>Category Name</td>
        <td>Edit</td>
        <td>Delete</td>
        <td>Active/Deactive</td>
      </tr>
     
      </tbody>
      <tfoot>
     <tr></tr>
      </tfoot>
    </table>
  </div>
@endsection