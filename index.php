<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body>
        <div class="container" style="margin-top:8%">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <br>
                         <div class="login-panel panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Silahkan Login</h3>
                            </div>
                            <div class="panel-body">
                                <form action="login-process.php" method="POST">
                                <p><img src="png/person-3x.png">Username</p>
                                <input type="text" name="username" placeholder="Username" class="form-control">
                                <p><img src="png/key-3x.png">Password</p>
                                <input type="password" name="password" placeholder="Password" class="form-control">
                                <label>
                                Belum punya akun..? <a href="tambah_user.php">Daftar</a>
                                </label><br>
                                <input type="submit" name="" value="Login" class="btn btn-success">
                                
                                </form> 
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <?php 
                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                        echo '<div id="pesan" class="alert alert-danger">'.$_SESSION['pesan'].'</div>';
                    }
                    $_SESSION['pesan'] = '';
                    ?>
            </div>
        </div>
        <script type="text/javascript" src="style/jquery.js"></script>
        <script>
            $(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
            setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
        </script>
    </body>
</html>



           