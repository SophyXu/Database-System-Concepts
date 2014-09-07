<?php
session_start();
$A_name=$_POST["name"];  
$A_pwd=$_POST["pwd"];           

class chkinput{             
   var $name; 
   var $pwd;

   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }

   function checkinput(){
     include("conn/conn.php");         
     $sql=mysql_query("select * from admin where admin_id='".$this->name."'",$conn);
     $info=mysql_fetch_array($sql); 
     if($info==false){                  
    echo "<script language='javascript'>alert('管理员ID错误，请重新输入！');history.back();</script>";
    exit;
      }
      else{   
           $sql=mysql_query("select * from admin where admin_id='".$this->name."' and password='".$this->pwd."'",$conn);
         $info=mysql_fetch_array($sql); 
         if($info==false){                  
        echo "<script language='javascript'>alert('管理员密码错误，请重新输入！');history.back();</script>";
        exit;
          }    
          echo "<script>alert('管理员登陆成功！');window.location='admin_login.php';</script>";
    $_SESSION['admin_id'] = $info['admin_id'];
    $_SESSION['pwd'] = $info['password'];
    $_SESSION['name'] = $info['admin_name'];
    $_SESSION['contact'] = $info['contact'];
   }
 }
}
    $obj=new chkinput(trim($A_name),trim($A_pwd));      
    $obj->checkinput();               
?>
