<?php
    include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">
            @import url('style.css');
        </style>
        
        <title></title>
    </head>

    <body>
        <div class="background">

        <div class="nav">
                <a class="a" href="logout.php">LOGOUT</a>
                <a class="b" href="#">REGISTER</a>
                <a class="c" href="home.php">HOME</a>
                <a class="d" href="about.php">ABOUT AJK</a>
                <a class="e active" href="user.php">USER</a>
        </div>

        <div class="table">
            <table>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Angkatan</th>
                        <th>Email</th>
                    </tr>

                <?php
                    $id = 1;
                    $qry = mysqli_query($conn, "SELECT * FROM Register");
                    while($row=mysqli_fetch_array($qry)){
                ?>
             
            <div class="UD">
                <a class="f" href="update.php?id=<?php echo $row['id']; ?>">UPDATE</a>
                <a class="f" onclick="return confirm('Yakin ?')" href="delete.php?id=<?php echo $row['id']; ?>">DELETE</a>
            </div>

                    <tr>
                        <td><?php echo $id++; ?></td>
                        <td><?php echo $row['Username']; ?></td>
                        <td><?php echo $row['Nama']; ?></td>
                        <td><?php echo $row['Angkatan']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                    
                    </tr>
                <?php }?>
            </table>
            </div>
        </div>

        <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
        <script type="text/javascript">

            $(document).ready(function(){
                $('a').click(function(){
                    var selected = $(this);
                    $('a').removeClass('active');
                    $(selected).addClass('active');
                });
            });
        
        </script>

    </body>
</html>