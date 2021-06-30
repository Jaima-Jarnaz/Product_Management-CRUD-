@extends('product_home')
@section('mainContent')
 <div class="container m-5">
     <div class="row justify-content-center">
         @if (empty($searched_product))
         <div class="alert alert-danger" role="alert">
             Sorry data not found!!!
         </div>
             
         @endif
         <div class="col-md-8 p-5">
              @foreach ($searched_product as $searchData)
                <div class="card" style="width: 40rem;">
                    <img src={{"https://images.unsplash.com/photo-1534723452862-4c874018d66d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80"}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$searchData->name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price :{{$searchData->price}}</li>
                        <li class="list-group-item">Quantity :{{$searchData->quantity}}</li>
                        <li class="list-group-item">Created Date :{{$searchData->created_date}}</li>
                        <li class="list-group-item">Expire Date :{{$searchData->expire_date}}</li>
                    </ul>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

@endsection