<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;



// Route::get('/calculate/{num1}/{num2}/value', function () {
//     return view('index',compact('num1','num2','value'));
// });
Route::get('/calculate/{num1}/{num2}/{value}','CalculateController@display');
// Route::get('/insert',function(){
//    $results= DB::insert('insert into product(name,price) values(?,?)',['Vegetables',600]);
//    return "Data inserted successfully ";
// });

// Route::get('/read',function(){
//     $results=DB::select('select * from product where id=?',[6]);
//     // 
//     return $results;
// });

// Route::get('/update',function(){
//     $results=DB::update('update product set name="updated cars" where id=?',[6]);
//     // 
//     return "Data updated";
// });

// Route::get('/delete',function(){
//     $results=DB::delete('delete from  product  where id=?',['6']);
//     // 
//     return "Data deleted ";
// });

// Route::get('/show',function(){
//     $product_data  = DB::select('select * from product');
//         //return view('list',['data'=>$product_data]);
//         return $product_data;
// });





Route::view('/login','loginPage');
Route::post('/login',('LoginController@login'));
Route::get('/',('ProductController@productlist'));
Route::get('/create',('ProductController@create'));
Route::post('/create',('ProductController@store'));
Route::get('/edit/{id}',('ProductController@edit'));
Route::put('/update/{id}',('ProductController@update'));
Route::get('/delete/{id}',('ProductController@delete'));
Route::get('/search',('ProductController@search'));
Route::get('/logout',function(){
    session()->forget(['logindata']);
    return redirect('login');
});
//Route::resource('product','ProductController');


use App\Post;
Route::get('/post/show',function(){
    $post=Post::all();
    return $post;
});

Route::get('/post/find',function(){
    $post=Post::find(1);
    return $post;
});

Route::get('/post/findwhere',function(){
    $post=Post::where('id',2)->orderBy('id','desc')->take(1)->get();
    return $post;
});

Route::get('/post/findfail',function(){
    $post=Post::findorfail(3);
    return $post;
});

// Route::get('/post/findfail',function(){
//     $post=Post::where('count'<50)->findorfail();
//     return $post;
// });