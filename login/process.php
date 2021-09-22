<?php


require_once("connection.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

$id = "";
$nume = "";
$username = "";
$password= "";
$type = "";


    $id = $_POST["Id"];
    $nume = $_POST["nume"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $type = $_POST["type"];
  echo $id," ",$nume," ",$username," ",$password," ",$type;
    $update = "UPDATE users SET nume='$nume', username='$username',password='$password',type='$type' WHERE Id='$id' ";
    mysqli_query($db, $update);
    redirect("f3.php");
  //  header('location:f3.php');

?>

<?php include 'footer.php'; ?>
