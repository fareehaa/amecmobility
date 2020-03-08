@extends('admin.layouts.app')
@section('header')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection
@section('main-content')


  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add achievement</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
{{--    @include('includes.msg') --}}
  <form role="form" method="post" action="" enctype="multipart/form-data">
  {{csrf_field()}}
    <div class="box-body">
    <div class="col-lg-6">
    <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control" name="title" placeholder="title">
    </div>
    
    <div class="form-group">
      <label for="exampleInputPassword1">Location</label>
      <input type="text" class="form-control" name="location" placeholder="location">
    </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
    <label for="exampleInputFile">Select Image</label>
    <input type="file" id="exampleInputFile" name="img">
    </div>
  
    <div class="checkbox">
    <label>
    <input type="checkbox" name="status" value="1"> Active
    </label>
    </div>
    </div>
    </div>
    <h3 class="box-title">Write your achievement</h3>
    <br>
    <textarea name="body" {{-- class="textarea" --}} placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
    <div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
</form>
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