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
    }
    </script>
  </head>
  
  <body>

  <form name="form1" action="display_borrow.php"> 
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
        <li><a href="admin_login.php">首页</a></li>
        <li><a href="admin_add.php">图书入库</a></li>
        <li class="active"><a href="admin_borrow.php">借书</a></li>
        <li><a href="admin_back.php">还书</a></li>
        <li><a href="admin_ID.php">借书证管理</a></li>
        <li><a href="admin_about.php">管理员信息</a></li>
        <li><a href="quit.php">注销</a></li>
      </div>
      <div class="span10">
        <dl class="dl-horizontal">
          <?php
            include("conn/conn.php");
            $card_id = $_GET['id'];
            $sql = mysql_query("select book.book_id, category, book_name, publisher, writer, price, pub_time, book.number , warehouse.left_num from record, book, warehouse where record.card_id='$card_id' and book.book_id=record.book_id and book.book_id=warehouse.book_id limit 50");
            $row = mysql_fetch_array($sql); 
            if($row==false)
              echo "<script language='javascript'>alert('该借书证卡号不存在！');history.back();</script>";
            else 
          ?>
          <table class="table table-striped">
                      <h4>图书信息:</h4>
                         <thead>
                          <tr>
                            <th>书号</th>
                            <th>类别</th>
                            <th>书名</th>
                            <th>出版社</th>
                            <th>作者</th>
                            <th>价格</th>
                            <th>年份</th>
                            <th>总藏书量</th>
                            <th>库存</th>
                          </tr>
                        </thead>
                        <tbody>
          <?php
          do
            {
          ?>
            <tr>
            <td>  <?php echo $row['book_id'] ?> </td>
            <td>  <?php echo$row['category'] ?>  </td>
            <td>  <?php echo$row['book_name'] ?>  </td>
            <td>  <?php echo$row['publisher'] ?>  </td>
            <td>  <?php echo$row['writer'] ?>  </td>
            <td>  <?php echo$row['price'] ?>  </td>
            <td>  <?php echo$row['pub_time'] ?> </td>
            <td>  <?php echo$row['number'] ?>  </td>
            <td>  <?php echo$row['left_num'] ?> </td>
           </tr>
          <?php
            } while($row = mysql_fetch_array($sql))
          ?>
            <tbody>
          </table>
          <a href="admin_borrow.php"><button class="btn btn-large" type="button">返回</button></a>
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

