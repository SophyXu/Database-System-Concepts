<?php
	session_start();
	include("conn/conn.php");
	$file = fopen("addlibrary.txt", "r") or exit("Unable to open file!");
	while(!feof($file))  {
	    $array = explode(" ",fgets($file));
	    $book_id = $array[0];
		$book_category = $array[1];
		$book_name = $array[2];
		$book_publisher = $array[3];
		$book_author = $array[4];
		$book_year = $array[5];
		$book_price = $array[6];
		$book_num = $array[7];
		$sql = 	mysql_query("insert into book(book_id, category, book_name, publisher, writer, price, pub_time) values ('$book_id', '$book_category', '$book_name', '$book_publisher', '$book_author', '$book_price', '$book_year')");
		$sqll = mysql_query("insert into warehouse(book_id, total_num, left_num) values ('$book_id', $book_num, $book_num)");
	}
			if($sqll && $sql){
			echo "<script language='javascript'> alert('图书入库成功！'); history.back();</script>";
		}
		else{
			echo "<script language='javascript'> alert('图书入库失败！'); history.back();</script>";
		}
fclose($file);

?>