<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\DeviceTable;

class CustomProvider
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!empty(trim($request->input('client_token')))){

        $is_exists = DeviceTable::where([
            'appID'=> $request['appID'],
            'deviceID'=>$request['deviceID'],
            'uID' => $request['uID']
        ])->exists();
        if($is_exists){
            return $next($request);
        }
    }
        return response()->json('Invalid Token', 401);
    }
}
