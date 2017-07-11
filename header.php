<?php
//Connection to db will be established here. Caution :Local Host and Live Db details will differ ,change accordingly


   class dbcon{
   function connect(){
     $hostname='localhost';
     $username='root';
     $password='';
     $database='proposify';
     $mysqli = new mysqli($hostname, $username, $password, $database);
     //Connection Failed
     if(mysqli_connect_errno()) {
           echo "Connection Failed: " . mysqli_connect_errno();
           exit();
        }

     return $mysqli;
   }
   }



?>