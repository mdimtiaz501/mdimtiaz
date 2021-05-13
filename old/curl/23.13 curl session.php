<?php

$ci = curl_init( 'https://www.mdimtiaz.com/curl/23.13.1%20form.php' );
curl_setopt( $ci, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ci, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ci, CURLOPT_POSTFIELDS, 'uname=imtiaz&password=pass&submit=1' );
$cookie_file = 'https://www.mdimtiaz.com/curl/temp/cookies.txt';
curl_setopt( $ci, CURLOPT_COOKIEJAR, $cookie_file );
echo curl_exec( $ci );


$ci = curl_init( 'https://www.mdimtiaz.com/curl/23.13.1%20form.php' );
curl_setopt( $ci, CURLOPT_COOKIEFILE, $cookie_file );
curl_setopt( $ci, CURLOPT_RETURNTRANSFER, true );
echo curl_exec( $ci );





