@extends('admin.layouts.app')

@section('title','Cards')
@section('main-content')
<a href="{{route('cards.create')}} " class="btn btn-info btn-md">Add Card</a>
<div class="box-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>S.No</th>
        <th>Front Image</th>
        <th>Back Image</th>
        <th>Serial No</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Print</th>
      </tr>
      </thead>
      <tbody>
     @if(count($cards)>0)
        @foreach($cards as $card)
        <tr>
          <td> {{$loop->index + 1}} </td>
          
          <td> <img src="{{asset('storage/upload/'.$card->card)}} " style="height:150px; width:150px;"> </td>
          <td><img src="{{asset('storage/upload/cardback.jpg')}}" id="image2"style="height:150px; width:150px;"></td>
          <td> {{$card->serialno}} </td>
          <td>Edit</td>
          <td>Delete</td>
          <td><button id="prnt" class="btn btn-info">Print!</button></td>
        </tr>
        @endforeach
        @else
        <tr>
          <td>No DATA Found!!!...</td>
        </tr>
     @endif
     
      </tbody>
      <tfoot>
     <tr></tr>
      </tfoot>
    </table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('admin/print/printThis.js')}} "></script> 
<script>
var option = {
importCSS: false,
base:"{{asset('admin/print/printThis.js')}}"
} 
$("#prnt").on("click", function(){
$('#image2').printThis(option);
});
</script>
@endsection
