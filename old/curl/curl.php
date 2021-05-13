<?php

$ci = curl_init( 'https://i0.wp.com/www.newhorizonfitness.com.au/wp-content/uploads/2020/09/Image-for-Free-Gift.jpg' );
curl_setopt( $ci, CURLOPT_RETURNTRANSFER, 1);
curl_exec( $ci );

$info = curl_getinfo( $ci );
print_r( $info );

$headers = get_headers( 'https://i0.wp.com/www.newhorizonfitness.com.au/wp-content/uploads/2020/09/Image-for-Free-Gift.jpg' );
print_r( $headers );

