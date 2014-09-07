<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>深圳图书馆-检索 &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
  <script language="javascript">
  function check(form){
    if (form.book_name.value==""){
      alert("请输入书名");form.book_name.focus();return false;
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
                <li><a href="main.php">主页</a></li>
                <li class="active"><a href="#">资源检索</a></li>
                <li><a href="guide.php">读者指南</a></li>
                <li><a href="about.php">关于深图</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>

      <hr>
        <div class="hero-unit">
            <form class="form-search" action="post_search_name.php" method="GET"> 
               <label class="label">类别</label>
               &nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" name="category">
                <br>
               <label class="label">书名</label>
               &nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" name="book_name">
                <br>
                <label class="label">出版社</label>
                &nbsp&nbsp
                <input type="text" name="publisher">
                <br>
                <label class="label">作者</label>
                &nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" name="author">
                <br>
              <label class="label">年份</label>
                &nbsp&nbsp&nbsp&nbsp&nbsp
                <select name="start_year">
                <option value=""></option>
                <option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option>
                </select>1
              <span>-</span>
                <select name="end_year">
              <option value=""></option>
              <option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option>
                </select> 
            <br>
            <label class="label">价格区间</label>
              <select name="price1">
                <option value=""></option>
                <option value="5">5元</option>
                <option value="10">10元</option>
                <option value="15">15元</option>
                <option value="20">20元</option>
                <option value="25">25元</option>
                <option value="30">30元</option>
                <option value="35">35元</option>
                <option value="40">40元</option>
                <option value="45">45元</option>
                <option value="50">50元</option>
                <option value="60">60元</option>
                <option value="70">70元</option>
                <option value="80">80元</option>
                <option value="90">90元</option>
                <option value="100">100元</option>
              </select>
              <span>--</span>
              <select name="price2">
                <option value=""></option>
                <option value="5">5元</option>
                <option value="10">10元</option>
                <option value="15">15元</option>
                <option value="20">20元</option>
                <option value="25">25元</option>
                <option value="30">30元</option>
                <option value="35">35元</option>
                <option value="40">40元</option>
                <option value="45">4f5元</option>
                <option value="50">50元</option>
                <option value="60">60元</option>
                <option value="70">70元</option>
                <option value="80">80元</option>
                <option value="90">90元</option>
                <option value="100">100元</option>
              </select>
            <br>
            <label class="label">排序</label>
            &nbsp&nbsp&nbsp&nbsp&nbsp
              <select name="sort1">
                <option value="book_name_">书名</option>
                <option value="category_">类别</option>
                <option value="publisher_">出版社</option>
                <option value="author_">作者</option>
                <option value="year_">年份</option>
                <option value="price_">价格</option>
              </select>
              <span>--</span>
              <select name="sort2">
                <option value=""></option>
                <option value="asc">升序</option>
                <option value="desc">降序</option>
              </select>
            <br>
            <p>
              <input name="submit" type="submit" class="btn btn-primary" value="开始搜索">
            </p>
          </form>
        </div>
      <hr>

 


      <div class="footer">
        <p>&copy; 徐肖瑶 浙江大学计算机学院</p>
      </div>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>


  </body>
</html>
