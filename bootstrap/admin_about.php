<?php
session_start();
include("conn/conn.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>邓准图书馆-首页 &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  
  <body>
  <form name="form1" method="post" action="chklogin.php"> 
    <div class="container">
      <div class="masthead">
        <h3 class="muted">品味生活· 关注邓准图书馆</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="main_admin.php">主页</a></li>
                <li><a href="search.php">资源检索</a></li>
                <li><a href="guide.php">读者指南</a></li>
                <li><a href="about.php">关于本馆</a></li>
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
        <li><a href="admin_ID.php">借书证管理</a></li>
        <li class="active"><a href="admin_about.php">管理员信息</a></li>
        <li class="divider"></li>
        <li><a href="quit.php">注销</a></li>
      </div>
      <div class="span10">
        <dl class="dl-horizontal">
        <form action="get_admin_about.php" >
        <br>
         <dt>管理员ID：</dt>
         <dd><?php echo $_SESSION['admin_id']; ?></dd>
         <dt>&nbsp;</dt>
         <dd></dd>
         <dt>姓名：</dt>
         <dd><br><?php echo $_SESSION['name'] ?></dd>
         <dt>&nbsp;</dt>
         <dd></dd>
         <dt>联系方式：</dt>
         <dd><br><?php echo $_SESSION['contact'] ?></dd>
         </form>
        </dl>
      </div>
    </div>
  </div>
  <hr>
    <div class="footer">
      <p>&copy; 邓准 浙江大学数学系</p>
    </div>
  </div> 


    <script src="js\bootstrap.js"></script>


  </body>
</html>
