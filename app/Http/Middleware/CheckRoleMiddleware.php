<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     //we pass $role variable in handle function
    public function handle(Request $request, Closure $next, $role): Response
    {


        $user = User::findOrFail($request->id);
         if($user->role == $role){
             return $next($request);
        }

         return abort(404);

        // $user = User::findOrFail($request->user_id);
        // if($user->role == 'admin'){
        //     return $next($request);
        // }

        // return abort(404);

        //validation->pass
        //return $next($request);
    }
}
