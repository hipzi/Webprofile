<?php
    $Username = $_POST['Username'];
    $Nama = $_POST['Nama'];
    $Angkatan = $_POST['Angkatan'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    if(!empty($Username) || !empty($Nama) || !empty($Angkatan) || !empty($Email) || !empty($Password)) {
        $host = 'localhost';
        $dbUsername = 'root';
        $dbPassword = 'bismillah582';
        $dbname = 'WebAJK';

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }
        else{
            $SELECT = "SELECT Email From Register Where Email = ? Limit 1";
            $INSERT = "INSERT Into Register (Username, Nama, Angkatan, Email, Password) values (?, ?, ?, ?, ?)"
            
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $Email);
            $stmt->execute();
            $stmt->bind_result($Email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum==0){
                $stmt->close();

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssss", $Username, $Nama, $Angkatan, $Email, $Password);
                $stmt->execute();

                echo "New record inserted sucessfully";
            }
            else{
                echo "Someone already register using this email";
            }

            $stmt->close();
            $conn->close();
        }
    }
    else{
        echo "All field are required";
        die();
    }    


?> 