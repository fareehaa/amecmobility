@extends('admin.layouts.app')
@section('header')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection
@section('title','Edit Product Category')
@section('main-content')
<br>
<div class="col-lg-6 col-lg-offset-3">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Product Category Detail</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    @include('includes.sessionmsg')
    @include('includes.msg')
  <form action="{{route('category.update',$cats->id)}}" method="post" role="form">
     {{csrf_field()}}
     {{method_field("PUT")}}
    <div class="box-body">
       <div class="form-group">
          <label >Title </label>
       <input type="text" value="{{$cats->name}}" name="name" class="form-control"  placeholder="Product Category">
        </div>
      <div class="form-group">
        <label>Product Parent Category</label>
        <select class="form-control select2"  name="parent_id[]" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;">
          <option value="0">Top Level</option>
          @if (count($datas)>0)
            @foreach ($datas as $data)
            
            <option value="{{$data->id}}"
            @foreach ($cats->childrens as $children)
            @if($children->id == $data->id) 
                selected
            @endif
            @endforeach >{{$data->name}}</option>    
            
            @endforeach
         @endif 
       
        </select>
      </div>
       
        <div class="form-group">
          <label >Product Category Description</label>
          <input type="text" value="{{$cats->description}}" name="description" class="form-control"  placeholder="Product Category">
        </div>
        <div class="form-group">
          <label >Product Category Slug</label>
          <input type="text" id="txturl" name="title" class="form-control " value="">
		      <p class="small">{{config('app.url')}}<span id="url"></span></p>
			    <input type="hidden" name="slug" id="slug" value="">
        </div>
      <!-- /.box-body -->
  
      <div class="box-footer">
      <a href="{{route('category.index')}}" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary pull-right">Submit</button>
      </div>
    </form>
  </div>

</div>

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
{{-- @section('footer')
<script type="text/javascript">
  $(function(){
    $('#txturl').on('keyup', function(){
      var url = slugify($(this).val());
      $('#url').html(url);
      $('#slug').val(url);
    });
    
  });
  </script>
  @endsection --}}