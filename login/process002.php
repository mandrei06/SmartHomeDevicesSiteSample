<?php


require_once("connection.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

      redirect("index.php");
}

$id = "";

if(isset($_GET['deletec'])) {
    $id = $_GET['deletec'];
    $update1 = "DELETE FROM drepturi WHERE Id='$id'";
    mysqli_query($db, $update1);
    redirect("f3.php");
    // header('location:f3.php');
}
?>

<?php include 'footer.php'; ?>
