@extends('product_home')
@section('mainContent')
<div class="row justify-content-center  bg-light text-dark">
    <div class="col-md-6">
        <form action="create" method="POST" class="m-5 border border-success p-4">
            @csrf
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <input type="text" class="form-control" id="" name="price">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="" name="quantity">
            </div>
            <div class="mb-3">
                <label for="created_date" class="form-label">Created Date</label>
                <input type="date" class="form-control" id="" name="createDate">
            </div>
            <div class="mb-3">
                <label for="Expire_date" class="form-label">Expire Date</label>
                <input type="date" class="form-control" id="" name="expireDate">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
    
@endsection