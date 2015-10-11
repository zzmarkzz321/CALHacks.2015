<!-- 
// @Author: Mark renzo Santiago
// Cal Hacks 2015 
-->

<?php

class foundTable {

	public function getItemTags() {
	require "credentials.php";

		// establish connection with local DB
		$conn = mysqli_connect($servername, $username, $password);
		mysql_select_db($dbname);
	
		// check connection success
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		} else
			echo "success";

		// Perform queries into database
		$sql = "SELECT tags FROM itemDes WHERE userID='rnguyen29'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
   	 		// output data ofrow each row
		    $row = mysqli_fetch_assoc($result)
		} else {
		    echo "0 results";
		}

		$stringTest = "black ford garage remote";

		if($stringTest == $row) {
			echo "Success!";
		} else
			echo "Failed!";

		// Always close connection!
		mysqli_close($conn);

	}

}

?>
