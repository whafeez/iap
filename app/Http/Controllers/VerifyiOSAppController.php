<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ApiRepository;

class VerifyiOSAppController extends Controller
{
    public function index(Request $request)
    {
    	request()->validate([
            'receipt_hash' => 'required',
        ]);
        $receipt_hash = $request->get('receipt_hash');
        if ($receipt_hash!="") {
        	 
        	$result = ApiRepository::verifyInAppPurchase($receipt_hash);
        }
        if ($result) {

        	$date = new DateTime();
			$date->add(new DateInterval('P6M'));
			$date->format('Y-m-d H:i:s');
			$date->setTimezone(new DateTimeZone("UTC"));
        	$response = ['message' => $result, 'expiry_date' => $date->format('Y-m-d H:i:s')];
        }
         else {
         	$response = ['message' => $result];
         }
        return response($response, 200);
    }

    public function verifyrecord(Request $request)
    {
        request()->validate([
            'receipt_hash' => 'required',
        ]);
        $receipt_hash = $request->get('receipt_hash');
        if ($receipt_hash!="") {
             
            $result = ApiRepository::verifyRecords($receipt_hash);
        }
        if ($result) {

            $response = ['message' => 'rate limit has been increased please try later'];
        }
         else {
            $response = ['message' => 'success'];
         }
        return response($response, 200);
    }
}
