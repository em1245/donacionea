<?php

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,'https://ipnpb.sandbox.paypal.com/cgi-bin/webscr');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,"cmd=_notify-validate&" . http_build_query($_POST));
$response = curl_exec($sch);
echo ("$response");
echo '$response';
echo ($response);
curl_close($sch);
file_put_contents('test.txt',$response);



?>