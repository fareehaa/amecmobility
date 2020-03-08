@extends('admin.layouts.app')
@section('title','Create New Product Category')
@section('main-content')
<div class="col-lg-6 col-lg-offset-3">


<div class="box-header with-border">
    <h3 class="box-title">Product Category Detail</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form">
    <div class="box-body">
      <div class="form-group">
        <label >Product Category</label>
        <input type="text" class="form-control"  placeholder="Product Category">
      </div>
      <div class="form-group">
        <label>Serial No.</label>
        <input type="text" class="form-control"  placeholder="Serial No">
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