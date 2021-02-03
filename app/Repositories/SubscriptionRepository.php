<?php

namespace App\Repositories;
use Auth;
use Response;
use App\Models\Subscription;

class SubscriptionRepository extends BaseRepository {

   public static function makeSubScription(array $request)
   {
        $subscription = new Subscription();
        $subscription->item_name = $request['item_name'];
        $subscription->receipt = $request['receipt'];
        $subscription->expiry_date = $request['expiry_date'];
        $subscription->status = $request['status'];
        $subscription->os = $request['os'];
        $subscription->save();
   }
}
