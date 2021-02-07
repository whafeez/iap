## About In App Verification System
- This is a system which is used as a verification of in app purchases made on google play store and apple store in iOS games, this is mocking as real system while I've integrated a functionality which is not sending requests to iOS or Google for real, rather it's verification algorithm consist on the following scenario.

### Algorithm
- If the last character of the receipt string value is an odd number it must return true otherwise false.
- When it returns true there should be another info about expire date (Y-m-d H:i:s)
## Instllation
- git clone repo
- cd to cloned project directory
- run command composer install
- if needed run command php artisan key:generate
- create database with any name and use this name in .env 
- after mentioning database name, username, and password run below command
- php artisan migrate
### API End Points
## Device registration API
- http://127.0.0.1:8080/api/registerDevice (Device registration API that will return client_token)
- Request Example : {
    "uID"   :   1,
    "appID" :   "12sde8",
    "language"  :   "en",
    "deviceID"  :   "256850980948",
    "operating_system"  :   "android"
    } 
- Response: 
{
    "message": "register OK",
    "client_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNmY1M2E5YjkzMjQ1MTk1ODNiNDZhMzQxZTFjODc4M2VjMDkyYmM1N2RkMzMzOTNiZDYxMjZkMWVmMzFjNTk4NTY0MmMyMzAwZjVmNDliOTIiLCJpYXQiOjE2MTI3MDE1NDQsIm5iZiI6MTYxMjcwMTU0NCwiZXhwIjoxNjQ0MjM3NTQ0LCJzdWIiOiI4Iiwic2NvcGVzIjpbXX0.afKia0H69SqXX9SChAEVl58PTLuFh-OR9S8Wnp_GpU72eE9jAVxkcIeGFoRyxXmJ-km_CnacG2TaTGiTueo8_tcE1YGm3tFlMX2b1TZo3Cz3wjXWgWOwv0Jx7-2BWqMP0bW7FUI36CC624XtDkVNCOw5DhjL84jcTicyg4aOOE2h6Cpv-Y3L3qq7s5DlkrqtO9OhQu4OANXNnOMj-zitovLQuXlzXHIbphsxxCXpvbRm76CJawB2uw-QiZKxR7LONfpStgkq9TYzJD4Ls6rkm5_MfXF6KnCczKhg-R-Arjt2NwbemndO4nt49KOL3uixxqxLwRGKMyy7dBkYQJLht6y9E6VuNWuCCggVZnSna9d7AJSGIzJh1V7Uo79Z-3GlAkbu6rkgJut3utvPTWY4aWKIEHaA-cd7-SaHUgGYNEFzkqUCxZwWevc7EROfBMdeyKZXcagQ8wIpNpK-gn7oRKpx5vrvXbC3bNfkRnfo6XYuwcsVi9iY5ckAZx2psCyi4By2BS3uNFT82dp5iZWYNppA-U6t6MiAqz2JUk-8qr89I2HzaPPXXjJMmrCL6MiSjtbSUYIgyExPfN4zFbW1Al_gGy5x1kDXilDb2mUuR2wbeCOjPn_RnERuYSJJuWnFZDWgeRF1jWfE8CYmeqTPJzbPe4Jo_Ge3G1bJEhdx3d4"
}
## Purchase Subscription API
- http://127.0.0.1:8080/api/purchaseSubscription
- Request Example : {
    "client_token" : "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNmY1M2E5YjkzMjQ1MTk1ODNiNDZhMzQxZTFjODc4M2VjMDkyYmM1N2RkMzMzOTNiZDYxMjZkMWVmMzFjNTk4NTY0MmMyMzAwZjVmNDliOTIiLCJpYXQiOjE2MTI3MDE1NDQsIm5iZiI6MTYxMjcwMTU0NCwiZXhwIjoxNjQ0MjM3NTQ0LCJzdWIiOiI4Iiwic2NvcGVzIjpbXX0.afKia0H69SqXX9SChAEVl58PTLuFh-OR9S8Wnp_GpU72eE9jAVxkcIeGFoRyxXmJ-km_CnacG2TaTGiTueo8_tcE1YGm3tFlMX2b1TZo3Cz3wjXWgWOwv0Jx7-2BWqMP0bW7FUI36CC624XtDkVNCOw5DhjL84jcTicyg4aOOE2h6Cpv-Y3L3qq7s5DlkrqtO9OhQu4OANXNnOMj-zitovLQuXlzXHIbphsxxCXpvbRm76CJawB2uw-QiZKxR7LONfpStgkq9TYzJD4Ls6rkm5_MfXF6KnCczKhg-R-Arjt2NwbemndO4nt49KOL3uixxqxLwRGKMyy7dBkYQJLht6y9E6VuNWuCCggVZnSna9d7AJSGIzJh1V7Uo79Z-3GlAkbu6rkgJut3utvPTWY4aWKIEHaA-cd7-SaHUgGYNEFzkqUCxZwWevc7EROfBMdeyKZXcagQ8wIpNpK-gn7oRKpx5vrvXbC3bNfkRnfo6XYuwcsVi9iY5ckAZx2psCyi4By2BS3uNFT82dp5iZWYNppA-U6t6MiAqz2JUk-8qr89I2HzaPPXXjJMmrCL6MiSjtbSUYIgyExPfN4zFbW1Al_gGy5x1kDXilDb2mUuR2wbeCOjPn_RnERuYSJJuWnFZDWgeRF1jWfE8CYmeqTPJzbPe4Jo_Ge3G1bJEhdx3d4",
    "receipt_hash" : "13213213546549846513213548",
    "os":"android",
    "item_name" : "coins"
}
- Response: {
    "message": true,
    "expiry_date": "2021-08-07 15:58:34"
}

## Worker
### Subscription worker api call
- http://127.0.0.1:8080/api/subscriptionworker