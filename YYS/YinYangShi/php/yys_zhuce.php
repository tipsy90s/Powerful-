<?php
$email=@$_REQUEST['email'];
$pwd=@$_REQUEST['pwd'];
$upwd=@$_REQUEST['upwd'];
$phone=@$_REQUEST['phone'];
$conn=@mysqli_connect("127.0.0.1","root","","yys")or die("连接数据库错误");
$sql="SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql="SELECT * FROM t_user WHERE email='$email'";
$result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
if($row==null){
	if($email!=""){
	echo "<i>";
	echo "</i>";
	}
	if($email!="" AND $pwd!="" AND $upwd!="" AND $phone!=""){
	$sql="INSERT INTO t_user VALUES(null,'$email','$pwd','$upwd','$phone')";
	$result=mysqli_query($conn,$sql);
    header("refresh:0;url=http://127.0.0.1/YYS/YinYangShi/YinYangShi.html");
	}
}else{
   echo "用户已存在";
}

//

?>