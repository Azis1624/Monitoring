<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>MONITORING STAUS MULTI UPS BERBASIS (I.O.T)</title>

    <script type="text/javascript" src="jquery/jquery.min.js"></script>

    <!---Realtime--------------------------------------------------------------------------------------------->
    <script type="text/javascript">
    $(document).ready(function() {

    setInterval(function() {

    $("#voltageA").load("voltageA.php");
    $("#frequency1").load("frequency1.php");
    $("#hasil1").load("hasil1.php");
    $("#voltage1").load("voltage1.php");
    $("#power1").load("power1.php");
    $("#current1").load("current1.php");
    $("#energy1").load("energy1.php");
    $("#pf1").load("pf1.php");

    $("#voltageB").load("voltageB.php");
    $("#frequency2").load("frequency2.php");
    $("#hasil2").load("hasil2.php");
    $("#voltage2").load("voltage2.php");
    $("#power2").load("power2.php");
    $("#current2").load("current2.php");
    $("#energy2").load("energy2.php");
    $("#pf2").load("pf2.php");

    $("#Temp2").load("Temp2.php");
    $("#Hum2").load("Hum2.php");
    }, 1000)

    })
    </script>

    </head>
    <body>



  
    <div class="container" style="text-align: center; margin-top:100px">
      <h2>MONITORING STATUS MULTI UPS <br> BERBASIS (I.O.T) </h2>

      <!--susun tabel ke samping ---------------------------------------------------------------------------->


      <div class="card text-center" style="width: 99.99%; margin-top:100px">
      <div class="card-header" style="font-size:20px;font-weight: bold; background-color:lightskyblue ;" style="text-align: center;">
           MONITORING UPS 1
      </div>
      </div>


      <div style="display: flex;">

      
       <!--menampilkan nilai v input 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           V INPUT 
      </div>
      </div>
      <!--menampilkan nilai v input 2--->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="voltageA"> 0 </span>
      </div>
      </div>
      
      <!--akhir nilai v input-->

       <!--menampilkan tulisan volt------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           Volt
      </div>
      </div>

      <!--akhir nilai v input 1-->
      </div>


       <div style="display: flex;">

      
       <!--menampilkan nilai v input 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           V OUTPUT
      </div>
      </div>
      <!--menampilkan nilai v input 2--->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="voltage1"> 0 </span>
      </div>
      </div>
      

      <!--akhir nilai v input-->

       <!--menampilkan tulisan volt------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           Volt
      </div>
      </div>

      <!--akhir nilai v input 1-->
      </div>



      <div style="display: flex;">

      
       <!--menampilkan nilai FREKUENSI 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           FREQUENCY
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2--->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
     
      <span id="frequency1"> 0 </span>
      </div>
      </div>
      

      <!--akhir nilai v input2-->

       <!--menampilkan tulisan volt---->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           HZ
      </div>
      </div>

      <!--akhir nilai v input 2-->

      
      </div>



      <div style="display: flex;">

      
       <!--menampilkan nilai V BATTERY 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
            V BATTERY
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2----->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="hasil1"> 0 </span>
      </div>
      </div>
      
      <!--akhir nilai v i-->


      <!--menampilkan tulisan WATT---------->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           Volt
      </div>
      </div>

      <!--akhir nilai v input 1-->
      </div>



      <div style="display: flex;">

      
       <!--menampilkan nilai POWER 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
            POWER
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2----->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="power1"> 0 </span>
      </div>
      </div>
      

      <!--akhir nilai v i-->

       <!--menampilkan tulisan WATT---------->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           Watt
      </div>
      </div>

      <!--akhir nilai v input 1-->

      
      </div>

      <div style="display: flex;">

      
       <!--menampilkan nilai POWER 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
            CURRENT
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2----->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="current1"> 0 </span>
      </div>
      </div>
     

      <!--akhir nilai v i-->

       <!--menampilkan tulisan WATT---------->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           Amper
      </div>
      </div>

      <!--akhir nilai v input 1-->

      
      </div>

      <div style="display: flex;">

      
       <!--menampilkan nilai POWER 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
            ENERGY
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2----->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="energy1"> 0 </span>
      </div>
      </div>
     

      <!--akhir nilai v i-->

       <!--menampilkan tulisan WATT---------->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           Kwh
      </div>
      </div>

      <!--akhir nilai v input 1-->
      </div>

      <div style="display: flex;">

      
       <!--menampilkan nilai POWER 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
            POWER FACTOR
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2----->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="pf1"> 0 </span>
      </div>
      </div>
      

      <!--akhir nilai v i-->

       <!--menampilkan tulisan WATT---------->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           PF
      </div>
      </div>

      <!--akhir nilai v input 1-->
      </div>







      <div class="card text-center" style="width: 99.99%; margin-top:100px">
      <div class="card-header" style="font-size:20px;font-weight: bold;background-color: lightskyblue;" style="text-align: center;">
           MONITORING UPS 2
      </div>
      </div>


      <div style="display: flex;">

      
       <!--menampilkan nilai v input 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           V INPUT 
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2--->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
     
      <span id="voltageB"> 0 </span>
      </div>
      </div>
      

      <!--akhir nilai v input-->

       <!--menampilkan tulisan volt------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           Volt
      </div>
      </div>

      <!--akhir nilai v input 1-->

      
      </div>


      <div style="display: flex;">

      
       <!--menampilkan nilai v input 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           V OUTPUT
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2--->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="voltage2"> 0 </span>
      </div>
      </div>
      

      <!--akhir nilai v input-->

       <!--menampilkan tulisan volt------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           Volt
      </div>
      </div>

      <!--akhir nilai v input 1-->

      
      </div>




      <div style="display: flex;">

      
       <!--menampilkan nilai FREKUENSI 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           FREQUENCY
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2--->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
     
      <span id="frequency2"> 0 </span>
      </div>
      </div>
     

      <!--akhir nilai v input2-->

       <!--menampilkan tulisan volt---->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           HZ
      </div>
      </div>

      <!--akhir nilai v input 2-->

      
      </div>


      <div style="display: flex;">

      
       <!--menampilkan nilai V BATTERY 2------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
            V BATTERY
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2----->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="hasil2"> 0 </span>
      </div>
      </div>
      
      <!--akhir nilai v i-->


      <!--menampilkan tulisan WATT---------->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           Volt
      </div>
      </div>

      <!--akhir nilai v input 1-->
      </div>


      


      <div style="display: flex;">

      
       <!--menampilkan nilai POWER 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
            POWER
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2----->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="power2"> 0 </span>
      </div>
      </div>
      

      <!--akhir nilai v i-->

       <!--menampilkan tulisan WATT---------->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           Watt
      </div>
      </div>

      <!--akhir nilai v input 1-->

      
      </div>

      <div style="display: flex;">

      
       <!--menampilkan nilai POWER 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
            CURRENT
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2----->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="current2"> 0 </span>
      </div>
      </div>
      

      <!--akhir nilai v i-->

       <!--menampilkan tulisan WATT---------->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           Amper
      </div>
      </div>

      <!--akhir nilai v input 1-->

      
      </div>

      <div style="display: flex;">

      
       <!--menampilkan nilai POWER 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
            ENERGY
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2----->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="energy2"> 0 </span>
      </div>
      </div>
      

      <!--akhir nilai v i-->

       <!--menampilkan tulisan WATT---------->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           Kwh
      </div>
      </div>

      <!--akhir nilai v input 1-->

      
      </div>

      <div style="display: flex;">

      
       <!--menampilkan nilai POWER 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
            POWER FACTOR
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2----->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="pf2"> 0 </span>
      </div>
      </div>
      

      <!--akhir nilai v i-->

       <!--menampilkan tulisan WATT---------->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           PF
      </div>
      </div>

      <!--akhir nilai v input 1-->

      
      </div>







      <div class="card text-center" style="width: 99.99%; margin-top:100px">
      <div class="card-header" style="font-size:20px;font-weight: bold;background-color: lightskyblue;" style="text-align: center;">
           SUHU & KELEMBAPAN ALAT
      </div>
      </div>


      <div style="display: flex;">

      
       <!--menampilkan nilai v input 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           SUHU
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2--->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
      
      <span id="Temp2"> 0 </span>
      </div>
      </div>
      

      <!--akhir nilai v input-->

       <!--menampilkan tulisan volt------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           C
      </div>
      </div>

      <!--akhir nilai v input 1-->

      
      </div>


      <div style="display: flex;">

      
       <!--menampilkan nilai FREKUENSI 1------------------------------------------------------------------------>

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           KELEMBAPAN
      </div>
      </div>

      <!--akhir nilai v input-->

      <!--menampilkan nilai v input 2--->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
     
      <span id="Hum2"> 0 </span>
      </div>
      </div>
      
      <!--akhir nilai v input2-->

       <!--menampilkan tulisan volt---->

      <div class="card text-center" style="width: 33.33%;">
      <div class="card-header" style="font-size:15px;font-weight: bold;background-color: yellow ;">
           %
      </div>
      </div>

      <!--akhir nilai v input 2-->

      
      </div>

      <div class="card text-center" style="width: 99.99%; margin-bottom: 100px;">
      
      </div>
      

      </div> <!---------------------------------------------------------------------------------->



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>