
<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>

<div class="row">

    <div>
<?php echo$_SESSION["titlu"] ?>
    </div>
    <div>
    <?php echo $_SESSION["continut"] ?>
</div>
<div>
       USERRRRR!!
</div>
</div>

<ul>
 <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>

</ul>

<?php include 'footer.php'; ?>

