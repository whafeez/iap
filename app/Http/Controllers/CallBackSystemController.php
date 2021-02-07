<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Callback;
class CallBackSystemController extends Controller
{
    public function Index(Request $request)
    {
    	request()->validate([
            'appID' => 'required',
            'deviceID' => 'required',
            'event' => 'required',
        ]);

        $callback = new Callback();
        $callback->appID = $request->get('appID');
        $callback->deviceID = $request->get('deviceID');
        $callback->event = $request->get('event');
        $callback->save();
        $result = ['message' => true];
        return response($result, 200);
    }
}
