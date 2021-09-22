<?php


require_once("connection.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

   redirect("index.php");
}

$id = "";
$IdPage = "";
$IdUser = "";

$id = $_POST["Id"];
$IdPage = $_POST["IdPage"];
$IdUser = $_POST["IdUser"];

echo $id," ",$IdPage," ",$IdUser;
$update = "UPDATE drepturi SET IdPage='$IdPage', IdUser='$IdUser' WHERE Id='$id' ";
mysqli_query($db, $update);
redirect("f3.php");
//header('location:f3.php');

?>

<?php include 'footer.php'; ?>
