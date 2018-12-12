

<?php echo "It’s all right!";
$content = file_get_contents("php://input");
$update = json_decode($content, true);

if(!$update)
{
  exit;
}

$apiToken = "542609682:AAEefoEGUUriQtztOG-Yf5LSetKv1EmpxyQ";

$data = [
    'chat_id' => '@my_channel_name',
    'text' => 'Hello world!'
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data) );
// Do what you want with result
?>

