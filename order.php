<?php
$order = array (
    'campaign_id' => '1016797',
    'name' => $_POST['name'],
    'phone' => $_POST['phone'],
    'country_code' => 'RO',
    'sid5' => $_POST['sid5'],
    'sid2' => $_POST['sid2']
);

// Define ip
if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
    $ip =  $_SERVER['HTTP_CF_CONNECTING_IP'];
}  elseif (!empty($_SERVER['HTTP_X_REAL_IP'])) {
    $ip =  $_SERVER['HTTP_X_REAL_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip =  $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip =  $_SERVER['REMOTE_ADDR'];
}

$order['ip'] = $ip;

$parsed_referer = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_QUERY);
parse_str($parsed_referer, $referer_query);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://tracker.everad.com/conversion/new" );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POST,           1 );
curl_setopt($ch, CURLOPT_POSTFIELDS,     http_build_query(array_merge($referer_query, $order)) );
curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/x-www-form-urlencoded'));

$result=curl_exec ($ch);
$fb_pixel = $_POST['fb_pixel'];

if ($result === 0) {
    echo "Timeout! Everad CPA 2 API didn't respond within default period!";
} else {
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode === 200) {
        echo "Good! Order accepted!";
        header('Location: ./thanks-page/index.php?fb_pixel='.$fb_pixel);
    } else if ($httpCode === 400) {
        echo "Order data is invalid! Order is not accepted!";
    } else {
        echo "Unknown error happened! Order is not accepted! Check campaign_id, probably no landing exists for your campaign!";
    }
}