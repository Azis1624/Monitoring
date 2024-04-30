
<?php

   //ambil judul dan isi notifikasi
   $judul = $_GET['judul'];
   $isi   = $_GET['isi'];

   //url untuk firebase cloud messaging
   $url = "https://fcm.googleapis.com/fcm/send";
   //token device
   $token = "dvUNpUScR6CgbW8bYERCdU:APA91bEOZhHZ9tPjIVJQq6eN9-ioGuMmacr62JI0vXAV3MEMaSr_zgJk2FdVOKcJNrLPybZFD7BU7UMXy2GeEa_Ir0BZwqlRCFS1-JrhzVXRaegEqn8Kroekz90CRz-uCdRLmaYVEl9s";
   //server key fcm
   $serverkey = "AAAAZqk-684:APA91bH0T1c2FaEJdUdfvrO3_7I6bw7Flfdm2V6sJy4Zhz5Yzm6Z3EMbl5A6mU93XShBb4mrogJmBNVP7Q8nnhyl8OxFu06W9hDZNlxIEgC96t5jtYra-RL5XHwlvZLG6t2Py9HRzLMZ";

   //data JSON notifikasi
   $notification = array('title'=>$judul, 'body'=>$isi, 'sound'=>'default','badge'=>'1');
   //tujuan notifikasi
   $arrayToSend = array('to'=>$token, 'notification'=>$notification, 'priority'=>'high');

   $json = json_encode($arrayToSend);
   
   $header = array();
   $header[] = 'Content-Type:application/json';
   $header[] = 'Authorization: key='.$serverkey;
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

   //send request
   $response = curl_exec($ch);

   //close request
   if($response === FALSE)
   {
   	  die('FCM Send Error : '.curl_error($ch));
   }
   curl_close($ch);
?>
