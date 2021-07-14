<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $f = "FORWARD";
        $b = "BACKWARD";
        $l = "LEFT";
        $r = "RIGHT";
        $s = "STOP";

        $host = 'localhost';
        $dbusername = 'root';
        $dbpassword = '';
        $dbname = 'robot_base';

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
            die('connect error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
        } else {
            if (isset($_POST['f'])) {
                $query = "INSERT INTO orders VALUES('$f')";
                $run = mysqli_query($conn, $query);
                echo 'forward';
            } elseif (isset($_POST['b'])) {
                $query = "INSERT INTO orders VALUES('$b')";
                $run = mysqli_query($conn, $query);
                echo 'backward';
            } elseif (isset($_POST['r'])) {
                $query = "INSERT INTO orders VALUES('$r')";
                $run = mysqli_query($conn, $query);
                echo 'right';
            } elseif (isset($_POST['l'])) {
                $query = "INSERT INTO orders VALUES('$l')";
                $run = mysqli_query($conn, $query);
                echo 'left';
            } elseif (isset($_POST['s'])) {
                $query = "INSERT INTO orders VALUES('$s')";
                $run = mysqli_query($conn, $query);
                echo 'stop';
            }
        }
        ?>
        <script>
  window.watsonAssistantChatOptions = {
      integrationID: "66f07f19-578a-4ffb-8a55-e202b14af102", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "6d4ae15c-9ee7-463b-9626-5d6ae8e766ab", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>

    </body>
</html>
