<?php
$email = 'mayank.patel104@gmail.com';
$list_id = '111111';
$api_key = '111111-us19';
$data_center = substr($api_key,strpos($api_key,'-')+1);
$url = 'https://'. $data_center .'.api.mailchimp.com/3.0/lists/'. $list_id .'/members';
$json = json_encode([
    'email_address' => $email,
    'status'        => 'subscribed'
]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
$result = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
echo $status_code;
echo "<pre>";
var_dump($ch);
?>


<?php
//$email = 'mayank.patel@devdigital.com';
//$list_id = '4da53f9407';
//$api_key = '1f0bec1d0a4ae753ac4018368adca90a-us17';
//$data_center = substr($api_key,strpos($api_key,'-')+1);
//$url = 'https://'. $data_center .'.api.mailchimp.com/3.0/lists/'. $list_id .'/members/'. md5(strtolower($email));
//$ch = curl_init($url);
//curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_TIMEOUT, 10);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//$result = curl_exec($ch);
//$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//curl_close($ch);
//echo $status_code;
?>
