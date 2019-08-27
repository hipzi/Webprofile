<?php
    $Username = $_POST['Username'];
    $Nama = $_POST['Nama'];
    $Angkatan = $_POST['Angkatan'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Role = $_POST['Role'];

        $host = 'localhost';
        $dbUsername = 'root';
        $dbPassword = 'bismillah582';
        $dbname = 'WebAJK';

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }
        else{
            $stmt = $conn->prepare("Insert into Register (Role, Username, Nama, Angkatan, Email, Password) values (?, ?, ?, ?, ?, ?)");
        //    $hash = password_hash($Password, PASSWORD_DEFAULT);
            $stmt->bind_param("ssssss", $Role, $Username, $Nama, $Angkatan, $Email, md5($Password));
            $stmt->execute();
            $msg = "Registration Successfully";
            header('location:login.php');
            echo "Registration Successfully";
            $stmt->close;
            $conn->close;
        }

?>