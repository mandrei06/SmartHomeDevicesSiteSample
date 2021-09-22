
<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';
//echo basename($_SERVER['PHP_SELF']);
?>


<!--
<div class="row">

continut funct 1
</div>
<ul>
 <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>

</ul>--->

<?php include 'footer.php'; ?>

