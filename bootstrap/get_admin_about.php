<?php
	include("conn/conn.php");

	$sql = mysql_query("select * from book", $conn);

	while($info=mysql_fetch_array($sql)){
		echo $info['book_id'].'<br>';	
	}

?>
