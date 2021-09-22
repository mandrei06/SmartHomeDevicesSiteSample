<?php
require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

redirect("index.php");
}
include 'func2.php';
	if( isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$res= mysql_query("SELECT * FROM users WHERE Id='$id'");
		$row= mysql_fetch_array($res);
	}

	if( isset($_POST['newName']) )
	{
		$newName = $_POST['newName'];
		$id  	 = $_POST['id'];
		$sql     = "UPDATE users SET name='$newName' WHERE Id='$id'";
		$res 	 = mysql_query($sql)
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}


?>
<form action="edit.php" method="POST">
Name: <input type="text" name="newName" value="<?php echo $myrow[1]; ?>"><br />
<input type="hidden" name="Id" value="<?php echo $myrow[0]; ?>">
<input type="submit" value=" Update "/>
</form>

<?php include 'footer.php'; ?>
