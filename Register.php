

<?php 

// Parameters to modify $WEBHOOK_URL = 'https://{rubrica_test_bot}.herokuapp.com/execute.php'; 
$BOT_TOKEN = '{542609682:AAH6jYO9r7AjipO1ZBlJj_qZdAWQUSGnQXA}';
$API_URL = 'https://api.telegram.org/bot' . $BOT_TOKEN .'/';
$method = 'setWebhook';
$parameters = array('url' => $WEBHOOK_URL);
$url = $API_URL . $method. '?' . http_build_query($parameters);
$handle = curl_init($url); 
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($handle, CURLOPT_TIMEOUT, 60); 
$result = curl_exec($handle); 
print_r($result);




?>

