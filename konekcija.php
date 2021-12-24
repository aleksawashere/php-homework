<?php
     $conn = new mysqli('localhost', 'root', '');
    
     if(!$conn) {
         die('Niste povezani na server!');
     }
 
     if(!mysqli_select_db($conn, 'itehdomaci')) {
         echo 'Nepostojeća baza!';
     }
?>