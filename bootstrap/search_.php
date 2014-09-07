<?php
    include("conn/conn.php");
    $book_name = $_GET['book_name'];
    $start_year = $_GET['start_year'];
    $end_year = $_GET['end_year'];
    $price = $_GET['price'];
    $sql = mysql_query("select book.book_id, category, book_name, publisher, writer, price, pub_time, book.number , warehouse.left_num from record, book, warehouse where book.book_name='$book_name' and book.book_id=warehouse.book_id");
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