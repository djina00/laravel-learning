<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //this controller is invokde without specifing method yo invoke
        //Route::get('/your-route', YourController::class)
        return "This is a single action conroller";
    }
}
