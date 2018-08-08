

<?php echo "It’s all right!";
// recupero il contenuto inviato da Telegram
$content = file_get_contents("php://input");
// converto il contenuto da JSON ad array PHP
$update = json_decode($content, true); 
if(!$update) { 
  exit; 
} 
// assegno alle seguenti variabili il contenuto ricevuto da Telegram
// $message = isset($update['message']) ? $update['message'] : ""; 
// $messageId = isset($message['message_id']) ? $message['message_id'] : ""; 
// $chatId = isset($message['chat']['id']) ? $message['chat']['id'] : ""; 
// $firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
// $lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : ""; 
// $username = isset($message['chat']['username']) ? $message['chat']['username'] : ""; // 
// $date = isset($message['date']) ? $message['date'] : ""; 
// $text = isset($message['text']) ? $message['text'] : ""; 
$text=$update['message']['text'];
$chatid=$update['message']['from']['id'];
$agg=json_encode($update, JSON_PRETTY_PRINT);
sendMessage ($chatid, "$agg");
function sendMessage ($chatId, $text) {
  //global $api;
  $api='bot542609682:AAEefoEGUUriQtztOG-Yf5LSetKv1EmpxyQ';
  $url="https://api.telegram.org/$api/sendMessage?chatid=$chatid&$text=".urlencode($text); 
  $get = file_get_contents($url);
  }
// pulisco il messaggio ricevuto togliendo eventuali spazi prima e dopo il testo
//$text = trim($text);
// converto tutti i caratteri alfanumerici del messaggio in minuscolo
//$text = strtolower($text);
// mi preparo a restitutire al chiamante la mia risposta che è un oggetto JSON
// imposto l'header della risposta
//header("Content-Type: application/json");
// la mia risposta è un array JSON composto da chat_id, text, method
// chat_id mi consente di rispondere allo specifico utente che ha scritto al bot
// text è il testo della risposta
//$parameters = array('chat_id' => $chatId, "text" => $text);
// method è il metodo per l'invio di un messaggio (cfr. API di Telegram)
//$parameters["method"] = "sendMessage";
// imposto la inline keyboard
//$keyboard = ['inline_keyboard' => [[['text' =>  'myText', 'callback_data' => 'myCallbackText']]]];
//$parameters["reply_markup"] = json_encode($keyboard, true);
// converto e stampo l'array JSON sulla response
//echo json_encode($parameters);
//if($text='/info') {
  //sendMessage ($chatid, "Ciao");
// }
//else {$response = "Ciao $firstname $lastname il tuo username è $username";}
//if(strpos($text, "/start") === 0 || $text=="ciao")
//{
//$tastiera=0;
//$response = "Ciao $firstname $lastname il tuo username è $username";
//}

?>

