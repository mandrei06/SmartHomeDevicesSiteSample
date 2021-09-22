<?php

include 'connection.php';


if (isset($_SESSION["user_id"]) && $_SESSION["user_password"] != "" && $_SESSION["user_email"] != "" && $_SESSION["user_password_repeat"] != "") {

    redirect("dashboard.php");
}
include 'header.php';
$mode = "";
$title = "Inregistrare";
$mode = $_POST['mode'];

if ($mode == "register") {
    $username = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);
    $repass = trim($_POST['re_pass']);
    $result = $db->query("SELECT * FROM users WHERE users.nume = '$email'");
    $result1 = $db->query("SELECT * FROM users WHERE users.username = '$username'");

    if (!isset($_POST['agree-term'])) {

        echo "Mai intai trebuie sa accepti termenii si conditiile";

    } else if ($result->num_rows != 0) {
        echo "You already have an account associate with this email";
    } else if ($result1->num_rows != 0) {
        echo "Exista deja un cont cu acest nume";
    } else if (empty($username)) {
        echo "Username is required";
    } else if (empty($email)) {
        echo "Email is required";
    } else if (empty($pass)) {
        echo "Password is required";
    } else if (strlen($pass) < 4) {
        echo "Parola trebuie sa contina cel putin 4 caractere";
    } else {
        if ($pass == $repass) {
            $query = "INSERT INTO users (nume, username,password,type) VALUES ('$email','$username','$pass','1')";
            mysqli_query($db, $query);
            print $username;
            $numar = "INSERT INTO drepturi(IdUser,IdPage) SELECT users.Id,'1' FROM users WHERE username='$username'";
            mysqli_query($db, $numar);
            $numar1 = "INSERT INTO drepturi(IdUser,IdPage) SELECT users.Id,'2' FROM users WHERE username='$username'";
            mysqli_query($db, $numar1);
            $numar1 = "INSERT INTO drepturi(IdUser,IdPage) SELECT users.Id,'3' FROM users WHERE username='$username'";
            mysqli_query($db, $numar1);
            redirect("index.php");
            $_SESSION['message'] = 'Contul a fost creat cu succes, acum te poti loga';

        } else {


            echo "Ati introdus reintrodus parola gresit!";


        }
    }

}


?>


    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>



    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <p class="hide"><input type="text" name="mode" value="register"></p>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="username"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term"/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="http://localhost/login_secure/login/" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    </body>
    </html>


<?php include 'footer.php'; ?>