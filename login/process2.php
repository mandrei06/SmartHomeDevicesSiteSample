<?php


require_once("connection.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

$id = "";
$Thing1 = "";
$Thing2 = "";
$Thing3 = "";
$Thing4 = "";


$id = $_POST["Id"];
$Thing1 = $_POST["Thing1"];
$Thing2 = $_POST["Thing2"];
$Thing3=$_POST["Thing3"];
$Thing4=$_POST["Thing4"];

$update = "UPDATE features SET Thing1='$Thing1', Thing2='$Thing2', Thing3='$Thing3', Thing4='$Thing4' WHERE Id='$id' ";
mysqli_query($db, $update);
redirect("f3.php");
//header('location:f3.php');

?>

<?php include 'footer.php'; ?>
