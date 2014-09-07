<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>邓准图书馆-检索 &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
  <script language="javascript">
  function check(form){
    if (form.book_author.value==""){
      alert("请输入作者");form.book_author.focus();return false;
    }
  }
  </script>
  </head>

  <body>
    <div class="container">
      <div class="masthead">
        <h3 class="muted">品味生活 · 关注邓准图书馆</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li><a href="main.php">主页</a></li>
                <li class="active"><a href="#">资源检索</a></li>
                <li><a href="guide.php">读者指南</a></li>
                <li><a href="about.php">关于本图</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>

      <hr>
        <div class="hero-unit">
            <form class="form-search" action="post_search_author.php" method="GET"> 
              <label class="label">检索途径</label>  
              <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                  作者
                  <span class="caret"></span>
                </a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                    <li> <a tabindex="1" href="search.php">书名</a></li>
                    <li><a tabindex="2" href="search_category.php">类别</a></li>
                    <li><a tabindex="3" href="search_publisher.php">出版社</a></li>
                  </ul>
              </div>
                <input name="book_author" type="text" class="input-medium search-query">
              <br>
              <label class="label">出版年</label>
                &nbsp&nbsp
                <select name="start_year">
                <option value=""></option>
                <option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option>
                </select>
              <span>--</span>
                <select name="end_year">
              <option value=""></option>
              <option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option>
                </select> 
            <br>
            <label class="label">价格区间</label>
              <select name="price">
                <option value=""></option>
                <option value="to20">20元以下</option>
                <option value="to50">20-50元</option>
                <option value="up50">50元以上</option>
              </select>
            <br>
            <p>
              <input name="submit" type="submit" class="btn btn-primary" value="开始搜索" onClick="return check(form)">
            </p>
          </form>
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
