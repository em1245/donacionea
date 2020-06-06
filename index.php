<?php

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,'https://ipnpb.paypal.com/cgi-bin/webscr');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,"cmd=_notify-validate&" . http_build_query($_POST));
$response = curl_exec($ch);


curl_close($ch);



if($response == 'VERIFIED'){
    echo 'EST verificado';
}else{
    echo 'No se verifico';
}




?>