<?php
$servername  = "localhost";
$username = "root";
$password = "bismillah582";
$dbname = "WebAJK";

$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db('Register');
/*if($conn){
    echo "OK :)";
}
else{
    die("Failed :(".mysqli_connect_error());
}*/
?>