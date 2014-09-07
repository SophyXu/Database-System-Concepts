<?php
    session_start();
    include("conn/conn.php");
    $admin_id = $_SESSION["admin_id"];
    $card_id = $_POST['id'];
    $book_id = $_POST['idd'];
    $date = date("Y-m-d");
    $due = date("Y-m-d", strtotime("+1 months", strtotime("now")));
    $sql = mysql_query("select * from warehouse where book_id='$book_id'");   
    $row = mysql_fetch_array($sql);
        if($row==false){
            echo "<script language='javascript'>alert('该书号不存在！'); history.back();</script>";
        }
        else {
        	$mysql = mysql_query("select * from card where card_id='$card_id'");
            $col = mysql_fetch_array($mysql);	
            if($col==false){
                echo "<script language='javascript'>alert('该借书证不存在！'); history.back();</script>";
            }
            else{
                $mysql = mysql_query("select * from warehouse where book_id='$book_id'");
                $col = mysql_fetch_array($mysql);   
                if($col['left_num']==0){
                    echo "<script language='javascript'>alert('该书无库存'); history.back();</script>";
                }
                else{
                    $sql1 = mysql_query("insert into record(card_id, book_id, bor_date, back_date, admin_id) values ('$card_id', '$book_id', '$date', '$due', '$admin_id')");
                    $sql2 = mysql_query("update warehouse set left_num = left_num-1 where book_id='$book_id'");
                    echo "<script>alert('借书成功！');window.location='admin_borrow.php';</script>";
                }
            }
        }

?>
