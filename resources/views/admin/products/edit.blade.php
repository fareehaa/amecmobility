@extends('admin.layouts.app')
@section('header')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection
@section('title','Create New Product')
@include('includes.msg')
@include('includes.sessionmsg')
@section('main-content')
<div class="row">
<br>
  <div class="box box-primary">
<div class="box-header with-border">
    <h3 class="box-title">Product Detail</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start --> 
  <form role="form" action="{{route('products.update',$data->id)}}" method="POST" enctype="multipart/form-data"> 
    {{csrf_field()}}
    {{method_field("PUT")}}
    <div class="box-body">
      <div class="col-lg-6"> 
      <div class="form-group">
        <label >Product Title</label>
        <input type="text" value="{{$data->title}}" name="title" class="form-control">
      </div>
      <div class="form-group">
      <div><img src="{{asset('storage/products/'.$data->thumbnail)}}" style="height:150px; width:150px;"> </div>
        <label >Product Image</label>
      <input type="file" value="{{$data->thumbnail}}" name="thumbnail" class="form-control">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Arrival Type</label>
        <input type="text" class="form-control"  value="{{$data->arrivaltype}}" name="arrivaltype" placeholder="slug">
      </div>
      
      
      <div class="form-group">
        <label>Product Category</label>
        <select class="form-control select2" name="category_id[]" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;">
          @if(count($cat)>0)
          @foreach($cat as $category)
        <option value="{{$data->id}}"
            @foreach ($data->categories as $item)
                @if($category->id == $item->id)
                selected
                @endif
            @endforeach
            >{{ $category->name}}</option>
          @endforeach
          @endif
        </select>
      </div> 
      <div class="form-group">
        <label for="exampleInputPassword1">Original Amount</label>
        <input type="text" class="form-control" value="{{$data->originalAmount}}" name="originalAmount" placeholder="slug">
      </div></div>
      <div class="col-lg-6">
        <div class="form-group">
          <label for="exampleInputPassword1">GST Amount</label>
          <input type="text" class="form-control" value="{{$data->gst}}" name="gst" placeholder="slug">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Discount</label>
          <input type="text" class="form-control" value="{{$data->discount}}" name="discount" placeholder="slug">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Final Amount</label>
          <input type="text" class="form-control" value="{{$data->finalAmount}}" name="finalAmount" placeholder="slug">
        </div>
      <div class="form-group">
        <label>Product Details</label>
        <textarea id="editor1" class="form-control" value="{{$data->description}}" name="description" rows="3" > {!!$data->description!!}</textarea>
      </div>
      </div></div>
    <!-- /.box-body -->

    <div class="box-footer">
      <a href="{{route('products.index')}}" class="btn btn-danger" style="margin-left:150px;"> Cancel</a>
     
      <button type="submit" class="btn btn-primary pull-right"  style="margin-right:150px;">Submit</button>
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
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
@endsection