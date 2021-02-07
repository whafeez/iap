<?php

namespace App\Repositories;
use Auth;
use Response;
use App\Models\DeviceTable;
use Illuminate\Support\Str;
class RegistrationRepository extends BaseRepository {

   public static function registerDevice(array $request)
   {
        
        $deviceTable = new DeviceTable();
        $deviceTable->uID = $request['uID'];
        $deviceTable->appID = $request['appID'];
        $deviceTable->language = $request['language'];
        $deviceTable->operating_system = $request['operating_system'];
        $deviceTable->deviceID = $request['deviceID'];
        $deviceTable->client_token = '';
        $deviceTable->save();
        $passport_token = $deviceTable->createToken('MyApp')->accessToken;
        $deviceTable->client_token = $passport_token;
        $deviceTable->save(); 
        return $passport_token;
   }

   public static function getClientToken()
   {
     $deviceTable = new DeviceTable();
     $passport_token = $deviceTable->createToken('MyApp')->accessToken;
     $deviceTable->save(); 
     return $passport_token;

   }
}
