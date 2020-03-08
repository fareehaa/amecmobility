@extends('admin.layouts.app')
@section('header')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection
@section('title','Create New Product')

@section('main-content')
<div class="col-lg-6 col-lg-offset-3">
<br>
  <div class="box box-primary">
<div class="box-header with-border">
    <h3 class="box-title">Product Detail</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start --> 
  <form role="form" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data"> 
    <div class="box-body">
      <div class="form-group">
        <label >Product Title</label>
        <input type="text" name="title" class="form-control">
      </div>
      <div class="form-group">
        <label >Product Image</label>
        <input type="file" name="thumbnail" class="form-control">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">slug</label>
        <input type="text" class="form-control" name="slug" placeholder="slug">
      </div>
      <div class="form-group">
        <label>Product Category</label>
        <select class="form-control select2" name="parent_id[]" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;">
          @if(count($datas)>0)
          @foreach($datas as $data)
        <option value="{{$data->id}}">{{ $data->name}}</option>
          @endforeach
          @endif
          
          
        </select>
      </div>
      <div class="form-group">
        <label>Product Details</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>
      </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.box -->
@endsection
@section('footer')
<script src="{{asset('admin/plugins/select2/select2.full.min.js')}}"></script>
<script>
    $(document).ready(function()
    {
        $(".select2").select2();
    });
</script>
@endsection