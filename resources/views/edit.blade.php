@extends('product_home')
@section('mainContent')
<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/update/{{$product->id}}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <input type="text" class="form-control" id="" name="price" value="{{$product->price}}">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="" name="quantity" value="{{$product->quantity}}">
            </div>
            <div class="mb-3">
                <label for="created_date" class="form-label">Created Date</label>
                <input type="date" class="form-control" id="" name="createDate" value="{{$product->created_date}}">
            </div>
            <div class="mb-3">
                <label for="Expire_date" class="form-label">Expire Date</label>
                <input type="date" class="form-control" id="" name="expireDate" value="{{$product->expire_date}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
    
@endsection