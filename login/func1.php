
<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';
//echo basename($_SERVER['PHP_SELF']);
?>

<!<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>


<ul class="vertical dropdown menu" data-dropdown-menu style="max-width: 250px;">
    <li>
        <a href="#">Adaugare</a>
        <ul class="vertical menu nested">
            <li><a href="http://localhost/login_secure/login/addhome.php">Casa noua</a></li>
            <li><a href="#">Camera noua</a></li>
            <li><a href="#">Device nou</a></li>
            <!-- ... -->
        </ul>
    </li>
</ul>


    <div class="form-wrapper2">

        <h2>Adauga casa</h2>
        <form action="addhome.php" method="POST">
            <div class="form-item">
                <label>Nume</label>
                <input type="text" name="nume" placeholder ="Nume cheie pentru identificarea casei"></input>
            </div>

            <div class="form-item">
                <label>Adresa</label>
                <input type="text" name="adresa" placeholder="Introduceti adresa" ></input>
            </div>

            <div class="form-item">
                <label>Numar de camere</label>
                <input type="text" name="text" placeholder="Introduceti numar de camere" ></input>
            </div>

            <div class="form-item">
                <label>Descriere</label>
                <input type="text" name="descriere"  placeholder="Alte informatii" ></input>
            </div>



            <div class="button-panel">
                <input type="submit" class="button" title="update_c" name="update_c" value="Update"></input>

            </div>
        </form>

    </div>


</body>
</html>



<?php include 'footer.php'; ?>

