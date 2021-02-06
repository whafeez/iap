<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\DeviceTable;
class CheckApiToken
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
        if(!empty(trim($request->input('api_token')))){

        $is_exists = DeviceTable::where('client_token' , hash('sha256',$request->input('api_token')))->exists();
        if($is_exists){
            return $next($request);
        }
    }
        return response()->json('Invalid Token', 401);
    }
}
