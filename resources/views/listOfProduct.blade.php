@extends('product_home')
@section('mainContent')
<div class="bg-light p-5 m-5 border border-primary">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Created Date</th>
      <th scope="col">Expire Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($product as $products)
    <tr>
      <th scope="row">#</th>
      <td>{{$products->id}}</td>
      <td>{{$products->name}}</td>
      <td>{{$products->price}}</td>
      <td>{{$products->quantity}}</td>
      <td>{{$products->created_date}}</td>
      <td>{{$products->expire_date}}</td>
      <td><a class="btn btn-warning" href="/edit/{{$products->id}}">Update</a></td>
      <td><a class="btn btn-danger" href="/delete/{{$products->id}}">Delete</a></td>
    </tr>
     @endforeach
  </tbody>
</table>
</div>
@endsection