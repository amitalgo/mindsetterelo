<?php

namespace App\Http\Middleware;

use App\User;
use App\userRoles;
use App\roles;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class CheckRolePermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userId = Auth::user()->id;
        $isAdmin = Auth::user()->is_Admin;
        if($isAdmin){
            return $next($request);
        }else{
            $route = $request->route()->getName();
            $userObj = User::where('id',$userId)->firstOrFail();
            $permission=[];
//            $getRole=userRoles::where('id',$userId)->first();
            $getRole=User::find(2)->userRoles;
//            print_r($getRole[0]['id']); exit;
            foreach ($getRole as $roles){
                $permission=roles::find($roles['id'])->permission;
            }
//            print_r($permission); exit;
            $routeArray = json_decode($permission,JSON_UNESCAPED_SLASHES);
            //echo $route;
//            print_r($routeArray);exit;
            if(in_array($route,$routeArray)){
                //$request->merge(array("permission" =>true));
                return $next($request);
            }else{
                return Response::view('errors.admin403');
            }
//            return Response::view('errors.admin403', [], 403);
            //$request->merge(array("permission" =>false));
            //$myVar = Request::instance()->query('myVar');
            //return $next($request);
        }
    }
}
