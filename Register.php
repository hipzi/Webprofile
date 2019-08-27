<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">
            @import url('style.css');
        </style>
        <style>
                @import url('https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap');
        </style>
        <title></title>
    </head>

    <body>
        <div class="background">

            <div class="nav">
                <a class="a" href="login.php">LOGIN</a>
                <a class="b active" href="Register.php">REGISTER</a>
                <a class="c" href="logindulu.html">HOME</a>
                <a class="d" href="logindulu.html">ABOUT AJK</a>
                <a class="e" href="logindulu.html">USER</a>
            </div>

                <div class="register">
                    <h5>REGISTER</h5>

                    <form action="insert.php" method="POST">
                        <b> <h1>Username</h1> </b>
                        <p> <input type="text" title="Username" name="Username" /> </p>
                        <b> <h1>Nama</h1> </b>
                        <p> <input type="text" title="Nama" name="Nama" /> </p>
                        <b> <h1>Angkatan</h1> </b>
                        <p> <input type="text" title="Angkatan" name="Angkatan" /> </p>
                        <b> <h1>Email</h1> </b>
                        <p> <input type="text" title="Email" name="Email" /> </p>
                        <b> <h1>Password</h1> </b>
                        <p> <input type="Password" title="Password" name="Password" /> </p>
                        <b><h1>Role</h1></b>
                            <select name="Role">
                                <option></option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        <p> <button type="submit" class="btn">Submit</button> </p>
                    </form>
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