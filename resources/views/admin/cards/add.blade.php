@extends('admin.layouts.app')
@section('title','Create New Card')
@section('main-content')
<div class="col-lg-6 col-lg-offset-3">


<div class="box-header with-border">
    <h3 class="box-title">Card Detail</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="{{route('cards.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="box-body">
      <div class="form-group">
        <label >Front Image</label>
        <input type="file" name="card">
      </div>
      <div class="form-group">
        <label>Serial No.</label>
        <input type="text" class="form-control" name="serialno" placeholder="Serial No">
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