<?php
    session_start();
    include("conn/conn.php");
    $card_id = $_POST['id'];
    $bor_name = $_POST['name'];
    $work = $_POST['company'];
    $kind = $_POST['category'];
    $sql = mysql_query("insert into card values ('$card_id', '$bor_name', '$work', '$kind')");   
    if($sql){
        echo "<script language='javascript'>alert('借书证添加成功！'); history.back();</script>";
    }
    else {
        echo "<script language='javascript'>alert('借书证添加失败！'); history.back();</script>";
    }


?>