<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include_once "header.php";
	?>
	<div class="container" style="margin-top:8%">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <br>
                         <div class="login-panel panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Silahkan Daftar</h3>
                            </div>
                            <div class="panel-body">
                                <form action="insert_user.php" method="POST">
                                <p><img src="png/person-3x.png">Username</p>
                                <input type="text" name="username" placeholder="Username" class="form-control">
                                <p><img src="png/key-3x.png">Password</p>
                                <input type="password" name="password" placeholder="Password" class="form-control">
                                <input type="submit" name="" value="Daftar" class="btn btn-success">
                                
                                </form> 
                            </div>
                        </div>
                </div>
            </div>
      </div>
</body>
</html>