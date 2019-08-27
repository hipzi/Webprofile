<?php
    include 'conn.php';

    $Username = $_POST['Username'];
    $Password = md5($_POST['Password']);


            $query = "SELECT * FROM Register WHERE Username='$Username' AND Password='$Password'";
            $apa = $conn->query($query);


            if($apa->num_rows > 0) {
                    session_start();
                    $_SESSION['Username'] = $Username;
                    header("Location: home.php");
                }
            else {
                echo "Failed to Login";
                header("refresh:3; url=login.php");
            }



?>