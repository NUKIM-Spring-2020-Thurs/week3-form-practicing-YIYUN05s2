<?php


$name=$_POST["name"];
$birth=$_POST["birth"];
$gender=$_POST["gender"];
$mail=$_POST["email"];
$phone=$_POST["phone"];
$id=$_POST["id"];
$where=$_POST["where"];
$color=$_POST["color"];
$size=$_POST["size"];
$choice=$_POST["choice"];



echo "您的姓名:".$name."<br/>";
echo "生日:".$birth."<br/>";
echo "性別:".$gender."<br/>";
echo "信箱:".$mail."<br/>";
echo "電話:".$phone."<br/>";
echo "身分證字號:".$id."<br/>";
if(isset($_POST["how"])){
	$how=$_POST["how"];
	$hownumber=count($how);
echo "管道幾個:".$hownumber."<br/>";
for($i=0;$i<$hownumber;$i++){
echo "管道:".$how[$i]."<br/>";
	}
}


?>