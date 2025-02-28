<?php

namespace App\Http\Controllers;

use App\Models\MyBlog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
    //Insert new data Query Builder
        // DB::table('users')->insert([
        //     'name' => 'Jhon Doe',
        //     'email' => 'jhon@gmail.com',
        //     'password' => '123456'
        // ]);

    //Get data Query Builder
        //    $users =  DB::table('users')->where('id', 3)->first();
        //     return $users;

    //Update data  Query Builder
        // DB::table('users')->where('id', 3)->update([
        //     'name' => 'Anna'
        // ]);

    //Delete data  Query Builder
        //DB::table('users')->where('id', 2)->delete();

       // $blogs = DB::table('blogs')->pluck('title', 'id')->toArray();
        //dd($blogs);

        // $products = DB::table('products')->sum('price');
        // dd($products);

    //ELOQUENT ORM NEED MODAL!!
        // $user = new User();
        // $user->name = 'Artik';
        // $user->email = 'artik@gmail.com';
        // $user->password = '1234';
        // $user->save();

        // $product = new Product();
        // $product->name = 'Car';
        // $product->description = 'Test desc';
        // $product->price = 100;
        // $product->save();

        //$users = User::all();
        //$user = User::find(7)
        
        // foreach($users as $user){
        //     echo $user->name . '---' . $user->email;
        //     echo "<br>";
        //}

        //update
        // $user = User::where('id', 1)->first();
        // $user->email = 'hello@gmail.com';
        // $user->save();

        //delete
        //$user = User::find(4)->delete();
        //$user = User::findOrFail(4)->delete();
        
        //$product = Product::where(['id' => 1, 'price' => 433])->get();
        //$product = Product::where('name', 'LIKE', '%cumque%')->orWhere('description', 'LIKE', '%Nisi%')->get();
        //$product = Product::whereIn('id', [1, 2, 3])->get();
        //whereBetween

        // $blogs = MyBlog::where('status', 1)->get();
        //with query scope
        //$blogs = MyBlog::Active()->get();


        
        return view('welcome');
    }



    function showAboutPage(){
        return view('about');
    }
}
