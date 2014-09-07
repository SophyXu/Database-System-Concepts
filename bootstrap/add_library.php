<?php
	session_start();
	include("conn/conn.php");
	$book_id = $_POST['id'];
	$book_category = $_POST['category'];
	$book_name = $_POST['name'];
	$book_publisher = $_POST['publisher'];
	$book_author = $_POST['author'];
	$book_year = $_POST['year'];
	$book_price = $_POST['price'];
	$book_num = $_POST['num'];
	$sql = 	mysql_query("insert into book(book_id, category, book_name, publisher, writer, price, pub_time) values ('$book_id', '$book_category', '$book_name', '$book_publisher', '$book_author', '$book_price', '$book_year')");
	$sqll = mysql_query("insert into warehouse(book_id, total_num, left_num) values ('$book_id', $book_num, $book_num)");
	if($sqll && $sql){
		echo "<script language='javascript'> alert('图书信息录入成功！'); history.back();</script>";
	}
	else{
		echo "<script language='javascript'> alert('图书信息录入失败！'); history.back();</script>";
	}
?>