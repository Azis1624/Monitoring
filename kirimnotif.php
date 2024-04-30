
<?php

   //ambil judul dan isi notifikasi
   $judul = $_GET['judul'];
   $isi   = $_GET['isi'];

   //url untuk firebase cloud messaging
   $url = "https://fcm.googleapis.com/fcm/send";
   //token device
   $token = "efUQmnW4S7aKN2vGZkMrgW:APA91bH19thqE9FO9VCwE5eKEFhHM3ZOvxSTUjs-J-9lCndRK1KuJFlgHf1xABNy-_Hdlm8kv6zlIUtYi6XncSJJxtAbjZcSiwosQa9vOL6Vgj2z2yyU2fYojm3r7Yh9-QBmi7z7sqhT";
   //server key fcm
   $serverkey = "AAAAgo3XopQ:APA91bGt1u1NixuCvyX8BLny8Aq19JzhGgZe1RZqJjH-VWZA_n2-vRbTaWx4dyoOCe2Obt-z1T0eqXJyJMhRADfqyyyMNVW8_-3-8LMFVehlRqK0pWFUZZBxinGO1rp3UAnakacD6Eq4";

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
