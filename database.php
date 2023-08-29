
<?php
// this php script is for connecting with database
// data has to be fetched from local server
  
// Username is root
$user = 'root';
$password = '';
  
// Database name is geeksforgeeks
$database = 'oop_midterm';
  
// Server is localhost with
// port number 3306
$servername= "localhost";
$connect = new mysqli($servername, $user,
$password, $database);
  

// Checking for connections
if (!$connect){
    echo "Connection Unsuccessful!!!";
}
else{
  echo "Connection Success!!!";
}
  
?>