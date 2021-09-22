
<?php

include 'connection.php';
if (isset($_SESSION["user_id"]) && $_SESSION["user_password"] != "") {
 
    redirect("dashboard.php");
}
if (!empty($_SESSION['message'])) {
    echo '<p class="message"> '.$_SESSION['message'].'</p>';
    unset($_SESSION['message']);
}
include 'header.php';

$mode="";
$title = "Autentificare";
$mode = $_POST['mode'];

if ($mode == "loginare") {
    $username = trim($_POST['username']);
    $pass = trim($_POST['user_password']);

    if ($username == "" || $pass == "") {

       echo "INTRODUCETI DATELE";

     
    } else {
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass' ";
        $results= mysqli_query($db,$sql);
        if (!$results)
         die('Invalid querry:' .mysqli_error($db));
        else 
            {


         

$sql2 = mysqli_query($db,"SELECT users.Id, users.nume, users.username, user_types.redirect, dash_text.content_text,dash_text.titlu FROM users LEFT JOIN dash_text  ON users.type=dash_text.user_type_id LEFT JOIN user_types ON users.type= user_types.Id WHERE users.username = '$username' AND users.password = '$pass'");
$myrow1=mysqli_fetch_array($sql2,MYSQLI_ASSOC);

$rows= mysqli_num_rows($sql2);

            if ($rows > 0) {

                $_SESSION["user_id"] = $myrow1["Id"];
                $_SESSION["name"] = $myrow1["nume"];
                $_SESSION["username"] = $myrow1["username"];
                $_SESSION["titlu"] = $myrow1["titlu"];
                $_SESSION["continut"] = $myrow1["content_text"];
           
               


                redirect($myrow1["redirect"]);
                exit;
            } 

        }
    }
    redirect("index.php");
}


?>
<html>
<style>
    body  {
        background-image: url("back.jpg");
        background-color: #cccccc;
    }
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <body>
    <div id="login">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <p class="hide"><input type="text" name="mode" value="loginare" ></p>
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="user_password" id="password" class="form-control" placeholder="password">
                            </div>
                            <div class="form-group">
                                 <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="/login_secure/login/register.php#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>


</html>
<?php include 'footer.php'; ?>