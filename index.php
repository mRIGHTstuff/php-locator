<?php
require 'vendor/autoload.php';
use GeoIp2\Database\Reader;

// This creates the Reader object, which should be reused across lookups.
$reader = new Reader('/Users/Mike/Documents/code/PHP/location/GeoLite2-City.mmdb');

/* function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
} 


$user_ip = getUserIP(); */


// Replace "city" with the appropriate method for your database, e.g., "country"
$record = $reader->city(/*$_SERVER['REMOTE_ADDR']*/ '118.160.50.75');

print($record->country->isoCode . "\n"); // 'US'
print($record->country->name . "\n"); // 'United States'

print($record->city->name . "\n"); // 'Minneapolis' */

?>