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
  <script language="javascript">
  function check(form){
    if (form.id.value==""){
      alert("请输入书号");form.id.focus();return false;
    }
    if (form.name.value==""){
      alert("请输入书名");form.name.focus();return false;
    }
  }
  </script>
  </head>

  <body>
  <form name="form1" method="POST" action="add_library.php">
    <div class="container">
      <div class="masthead">
        <h3 class="muted">品味生活 · 关注邓准图书馆</h3>
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
        <li class="active"><a href="admin_add.php">图书入库</a></li>
        <li><a href="admin_borrow.php">借书</a></li>
        <li><a href="admin_back.php">还书</a></li>
        <li><a href="admin_ID.php">借书证管理</a></li>
        <li><a href="admin_about.php">管理员信息</a></li>
        <li class="divider"></li>
        <li><a href="quit.php">注销</a></li>
      </div>
      <div class="span4">
        <form class="form-horizontal" action="add_library.php" method="POST">
            <br>
            <br>
            <label class="control-label">书号</label>
            <div class="controls">
              <input name="id" type="text" class="logininput" id="inputEmial">
            </div>
            <label class="control-label">类别</label>
            <div class="controls">
              <input name="category" type="text" class="logininput" id="inputEmial">
            </div>
            <label class="control-label">书名</label>
            <div class="controls">
              <input name="name" type="text" class="logininput" id="inputEmial">
            </div>
            <label class="control-label">出版社</label>
            <div class="controls">
              <input name="publisher" type="text" class="logininput" id="inputEmial">
            </div>
            <label class="control-label">作者</label>
            <div class="controls">
              <input name="author" type="text" class="logininput" id="inputEmial">
            </div>
            <label class="control-label">年份</label>
            <div class="controls">
              <input name="year" type="text" class="logininput" id="inputEmial">
            </div>
            <label class="control-label">价格</label>
            <div class="controls">
              <input name="price" type="text" class="logininput" id="inputEmial">
            </div>
            <label class="control-label">数量</label>
            <div class="controls">
              <input name="num" type="text" class="logininput" id="inputEmial">
            </div>
            <div class="control-group">
              <div class="controls">
              <input name="submit" type="submit" class="btn btn-primary" value="入库" onClick="return check(form1)">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <a href="admin_add.php"><button class="btn" type="button">继续添加</button></a>
              </div>
            </div
        </form>
        </form>
      </div>
        <div class="span4">
        <dl class="dl-horizontal">
        <br>
         <form class="form-horizontal" action="test.php" method="POST">
            <div class="control-group">
            <h4>批量入库：</h4>
            </div>
            <div class="controls">
              <input name="submit" type="submit" class="btn btn-primary" value="确认" >
            </div>
          </form>
        </dl
      </div>
    </div>
  </div>
  <hr>
    <div class="footer">
      <p>&copy; 邓准 浙江大学数学系</p>
    </div>
  </div> 


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>


  </body>
</html>
