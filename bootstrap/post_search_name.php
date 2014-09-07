<?php
session_start();
include("conn/conn.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>深圳图书馆-简介 &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">设计藏书容量400万册·读者坐席2000个·网络节点3000个·日均可接待读者8000人次</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li><a href="main.php">主页</a></li>
                <li class="active"><a href="search.php">资源检索</a></li>
                <li><a href="guide.php">读者指南</a></li>
                <li><a href="about.php">关于深图</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>


      <hr>
        <div class="hero-unitblack">
<?php
    include("conn/conn.php");
    $category = $_GET['category'];
    $book_name = $_GET['book_name'];
    $publisher = $_GET['publisher'];
    $author = $_GET['author'];
    $start_year = $_GET['start_year'];
    $end_year = $_GET['end_year'];
    $price1 = $_GET['price1'];
    $price2 = $_GET['price2'];
    $sort1 = $_GET['sort1'];
    $sort2 = $_GET['sort2'];
    $sql = "t";
    if($category!=''){
      if($sql=="t")
        $sql = "select book.book_id, category, book_name, publisher, writer, price, pub_time, warehouse.total_num , warehouse.left_num from book, warehouse where book.category='$category' and book.book_id=warehouse.book_id";
      else
        $sql = $sql . " " . "and book.category='$category'";
    }
    if($book_name!=''){
      if($sql=="t")
        $sql = "select book.book_id, category, book_name, publisher, writer, price, pub_time, warehouse.total_num , warehouse.left_num from book, warehouse where book.book_id=warehouse.book_id and book.book_name='$book_name'";
      else
        $sql = $sql . " " . "and book.book_name='$book_name'";
    }
    if($publisher!=''){
      if($sql=="t")
        $sql = "select book.book_id, category, book_name, publisher, writer, price, pub_time, warehouse.total_num , warehouse.left_num from book, warehouse where book.book_id=warehouse.book_id and book.publisher'$publisher'";
      else
        $sql = $sql . " " . "and book.publisher'$publisher'";
    }
    if($author!=''){
      if($sql=="t")
        $sql = "select book.book_id, category, book_name, publisher, writer, price, pub_time, warehouse.total_num , warehouse.left_num from book, warehouse where book.book_id=warehouse.book_id and book.writer='$author'";
      else
        $sql = $sql . " " . "and book.writer='$author'";
    }
    if($start_year!=''){
      if($sql=="t")
        $sql = "select book.book_id, category, book_name, publisher, writer, price, pub_time, warehouse.total_num , warehouse.left_num from book, warehouse where book.book_id=warehouse.book_id and pub_time<$end_year and pub_time>$start_year";
      else
        $sql = $sql . " " . "and pub_time<$end_year and pub_time>$start_year";
    }
    if($price1!=''){
      if($sql=="t")
        $sql = "select book.book_id, category, book_name, publisher, writer, price, pub_time, warehouse.total_num , warehouse.left_num from book, warehouse where book.book_id=warehouse.book_id and price<$price2 and price>$price1";
      else
        $sql = $sql . " " . "and price<$price2 and price>$price1";
    }
    if($sort2!=''){
      if($sort1=="book_name_")
        $sql = $sql . " " . "order by book_name". " " .$sort2;
      if($sort1=="category_")
        $sql = $sql . " " . "order by category". " " .$sort2;
      if($sort1=="publisher_")
        $sql = $sql . " " . "order by publisher". " " .$sort2;
      if($sort1=="author_")
        $sql = $sql . " " . "order by writer". " " .$sort2;
      if($sort1=="price_")
        $sql = $sql . " " . "order by price". " " .$sort2;
    }
    $sql = $sql . " " . "limit 50";
      $fetch = mysql_query($sql);
      $row = mysql_fetch_array($fetch);
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
            <td>  <?php echo$row['total_num'] ?>  </td>
            <td>  <?php echo$row['left_num'] ?> </td>
           </tr>
          <?php
            } while($row = mysql_fetch_array($fetch))
          ?>
            <tbody>
          </table>
          <a href="search.php"><button class="btn btn-large" type="button">返回</button></a>
        </div>
      <hr>
      <div class="footer">
        <p>&copy; 徐肖瑶 浙江大学计算机学院</p>
      </div>

    <script src="js\bootstrap.js"></script>


  </body>
</html>

