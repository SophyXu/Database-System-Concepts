<?php
    session_start();
    include("conn/conn.php");
    $admin_id = $_SESSION["admin_id"];
    $card_id = $_POST['id'];
    $book_id = $_POST['idd'];
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
                $mysql = mysql_query("select * from record where book_id='$book_id' and card_id='$card_id'");
                $col = mysql_fetch_array($mysql); 
                if($col==false){
                echo "<script language='javascript'>alert('该书未被借出！'); history.back();</script>";
                }  
                else{
                    $sql1 = mysql_query("delete from record where book_id='$book_id' and card_id='$card_id' ");
                    $sql2 = mysql_query("update warehouse set left_num = left_num+1 where book_id='$book_id'");
                    echo "<script>alert('还书成功！');window.location='admin_back.php';</script>";
                }
            }
        }


?>
