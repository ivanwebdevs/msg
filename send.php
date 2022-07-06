<?php 

$bot_id = "5094037631:AAH8KhJoBiVRrwRuJwctp9ZdSd9NOHMHEoc";
function send_message_bot($chat_id,$text){
    global $bot_id;
          return file_get_contents("https://api.telegram.org/bot$bot_id/sendMessage?chat_id=$chat_id&text=" . urlencode("$text"));
}
//$data = file("text.txt");

    $numbers = file("https://raw.githubusercontent.com/ivanwebdevs/msg/main/list.txt");
    $messagegg = file_get_contents("https://raw.githubusercontent.com/ivanwebdevs/msg/main/msg.txt");
news:
    $removed = array_shift($numbers);  
    echo "$removed\n";   
    send_message_bot($removed,"$messagegg");
    //print_r($numbers);  
    sleep(0);


    if (count($numbers) === 0) {
        echo "selesai";
    }
   else{
    
goto news;
   }



?>
