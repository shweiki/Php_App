	<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		include "../../connect_restaurent.php";
		$hall_id =$_GET["hall_id"];
	 $table_id = $_GET["table_id"];
	 $sql = "	UPDATE tables_
 		SET status = 2
 		WHERE id= $table_id";

   if ($conn->query($sql) === TRUE) {
		 header("Location: http://". $_SERVER['SERVER_NAME']."/Wanter_app_php/pages/ShowTableHall.php?hall_id=$hall_id"); /* Redirect browser */

   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
}else {
header('Location: http://'. $_SERVER["SERVER_NAME"].'/Wanter_app_php/pages/samples/404.html');
}

  $conn->close();

   ?>
