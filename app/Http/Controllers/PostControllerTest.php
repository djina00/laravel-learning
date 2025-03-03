<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRoleMiddleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PostController extends Controller
                                        // implements HasMiddleware
{

    //when using middleware we must implement contract(interface)->HasMiddleware
    //this interface contain public static function middleware which we must implement
    // public static function middleware(){
    //     return [new Middleware(CheckRoleMiddleware::class, only:['store'])];
    //                                                     //except:['index'];
    // }

    function index(){
        return view('post.index');
    }

    function store(Request $request){
        dd($request->all());
    }
}
