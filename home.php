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
                <a class="c active" href="home.php">HOME</a>
                <a class="d" href="about.php">ABOUT AJK</a>
                <a class="e" href="user.php">USER</a>
            </div>

            <div class="content">
                    <div class="home">
                            <h1>AJK</h1>
                            <h3>Arsitektur Jaringan Komputer</h3>
                    </div>
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