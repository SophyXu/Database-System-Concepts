<?php
session_start();
include("conn/conn.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>深圳图书馆-首页 &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
   <script language="javascript">
    function chk(form){
      if (form.id.value==""){
        alert("请输入借书证号");form.id.focus();return false;
      }
    }
    </script>
  </head>
  
  <body>


    <div class="container">
      <div class="masthead">
        <h3 class="muted">设计藏书容量400万册·读者坐席2000个·网络节点3000个·日均可接待读者8000人次</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="main_admin.php">主页</a></li>
                <li><a href="search.php">资源检索</a></li>
                <li><a href="guide.php">读者指南</a></li>
                <li><a href="about.php">关于本图</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <ul class="nav nav-list">
        <li class="nav-header">欢迎您：<?php echo $_SESSION["admin_id"];?> </li>
        <li class="divider"></li>
        <li><a href="admin_login.php">首页</a></li>
        <li><a href="admin_add.php">图书入库</a></li>
        <li><a href="admin_borrow.php">借书</a></li>
        <li><a href="admin_back.php">还书</a></li>
        <li class="active"><a href="admin_ID.php">借书证管理</a></li>
        <li><a href="admin_about.php">管理员信息</a></li>
        <li class="divider"></li>
        <li><a href="quit.php">注销</a></li>
      </div>
      <div class="span4">
        <dl class="dl-horizontal">
        <ul class="breadcrumb">
          <li><a href="admin_ID.php">借书证管理</a> <span class="divider">/</span></li>
          <li class="active">删除借书证</li>
        </ul>
         <form class="form-horizontal" action="card_delete.php" method="POST">
            <div class="control-group">
            <h4>请输入借书证号：</h4>
            <br>
              <div class="controls">
                <input type="text" name="id"placeholder="请输入借书证号">
              </div>
            </div>
            <div class="controls">
              <input name="submit" type="submit" class="btn btn-primary" value="确认" onClick="return chk(form)">
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              &nbsp&nbsp&nbsp
              <a href="admin_ID.php"><button class="btn" type="button">返回</button></a>
            </div>
          </form>
        </dl>
      </div>
    </div>
  </div>
<hr>

    <div class="footer">
      <p>&copy; 徐肖瑶 浙江大学计算机学院</p>
    </div>
  </div> 
    <script src="js\bootstrap.js"></script>
  </body>
</html>
