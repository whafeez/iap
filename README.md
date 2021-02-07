## About In App Verification System
- This is a system which is used as a verification of in app purchases made on google play store and apple store in iOS games, this is mocking as real system while I've integrated a functionality which is not sending requests to iOS or Google for real, rather it's verification algorithm consist on the following scenario.

### Algorithm
- If the last character of the receipt string value is an odd number it must return true otherwise false.
- When it returns true there should be another info about expire date (Y-m-d H:i:s)
