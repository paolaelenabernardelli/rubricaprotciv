

<?php echo "It’s all right!";
// recupero il contenuto inviato da Telegram
$content=file_get_contents("php://input");
// converto il contenuto da JSON ad array PHP
$update=json_decode($content, true); 
if(!$update) { 
  exit; 
} 
$website="https://api.telegram.org/";
$text=$update['message']['text'];
$chatid=$update['message']['from']['id'];
$agg=json_encode($update, JSON_PRETTY_PRINT);

function sendMessage($chatId, $text) {
  $api='bot542609682:AAEefoEGUUriQtztOG-Yf5LSetKv1EmpxyQ';
  $url=$GLOBALS[$website].$api."/sendMessage?chatid=$chatid&$text=".urlencode($text); 
  $get = file_get_contents($url);
  }
sendMessage($chatid, "$agg");
?>

