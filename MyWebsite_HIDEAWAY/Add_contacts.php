<?php

            $username ='hideAway';
            $password='qUK*QQFqP7zkL]5t';
            $hostname='localhost';
            $database='hideaway';

            $clientName = $_POST['yourName'];
            $clientEmail = $_POST['yEmail'];
            $clientPhone = $_POST['yNumber'];
            $clientMessage = $_POST['yMessage'];


            $connection = new mysqli($hostname, $username, $password, $database);

            $sql = $connection->prepare("INSERT INTO `hideaway_clients`( `Name`, `Email`, `Phone number`, `Message`) VALUES (?,?,?,?)");
            $sql->bind_param("ssss", $clientName, $clientEmail, $clientPhone, $clientMessage  );

            $sql->execute();

           

            $sql->close();
            $connection->close();
            
            
            header("Location: ./ContactPageEN.php");

?>