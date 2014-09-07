<?php
    session_start();
    include("conn/conn.php");
    $card_id = $_POST['id'];
    $sql = mysql_query("select * from card where card_id='$card_id'");   
    $row = mysql_fetch_array($sql);
        if($row==false){
            echo "<script language='javascript'>alert('该借书证号不存在！'); history.back();</script>";
        }
        else {
                $mysql = mysql_query("delete from card where card_id='$card_id'");
                echo "<script language='javascript'>alert('借书证删除成功！'); history.back();</script>";
        }


?>