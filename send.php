<?php 

$bot_id = "5094037631:AAH8KhJoBiVRrwRuJwctp9ZdSd9NOHMHEoc";
function send_message_bot($chat_id,$text){
    global $bot_id;
          return file_get_contents("https://api.telegram.org/bot$bot_id/sendMessage?chat_id=$chat_id&text=" . urlencode("$text"));
}
//$data = file("text.txt");

    $numbers = file("list.txt");

news:
    $removed = array_shift($numbers);  
    echo "$removed\n";   
    send_message_bot($removed,"Halo temen temen, ini pesan dari admin, buat kalian yang belum paham cara penggunaan bot kalian bisa cek video tutorial yang baru
   
    link: https://www.youtube.com/watch?v=FaOk1OzITcc");
    //print_r($numbers);  
    sleep(0);


    if (count($numbers) === 0) {
        echo "selesai";
    }
   else{
    
goto news;
   }



?>