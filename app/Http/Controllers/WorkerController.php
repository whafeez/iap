<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\VerifySubscriptionRecord;
use App\Models\Subscription;
use Carbon\Carbon;
class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	 $subscriptions = Subscription::where('status','expired')->get();
         $subscriptionJob = (new  VerifySubscriptionRecord($subscriptions))->delay(Carbon::now()->addMinutes(2));
        dispatch($subscriptionJob);
    }
}
