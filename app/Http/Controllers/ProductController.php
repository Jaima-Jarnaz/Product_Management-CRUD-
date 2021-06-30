<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // function insert(){
    //     $result=DB::insert('insert into product(name,price) values(?,?)',['Dresses',100]);

    // }

    function productlist(){
        if(!session()->has('logindata')){
            return redirect('login');

        }
        $product=Product::all();
        return view('listOfProduct',compact('product'));
        //return view('listOfProduct');
    }


    function create(){
        return view('create');
    }
    function store(Request $request){
        $product = new Product;
        $product->name=request('name');
        $product->price=request('price');
        $product->quantity=request('quantity');
        $product->created_date=request('createDate');
        $product->expire_date=request('expireDate');
        $product->save();
        return redirect('/');

    }

    function edit($id){
         $product=Product::find($id) ;
        return view('edit',compact('product'));
    }

    function update(Request $request){

        //$product = new Product;
        $product=Product::find($request->id) ;
        //$product->id=request('id');
        $product->name=request('name');
        $product->price=request('price');
        $product->quantity=request('quantity');
        $product->created_date=request('createDate');
        $product->expire_date=request('expireDate');
        $product->save();
        return redirect('/');

    }
    function delete($id){
        $product=Product::find($id);
        $product->delete();
        return redirect('/');
    }

    function search(Request $request){
        //$search=$request->get('search');
        //$productSearch=DB::table('product')
        $searchedProduct = DB::select('select * from product where id = ?', [$request->search]);
        return view('searchPage', ['searched_product'=>$searchedProduct]);
        //return $searchedProduct;
    }
}