<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$db = mysqli_connect('localhost', 'root', 'autoset', 'user');
if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL: ".mysqli_connect_errno();
}

$pw_encode = md5($pw);
$table_name = "user";
$sql = "INSERT INTO $table_name (`name`, `id`, `pw`, `email`, `phone`) VALUES ('$name', '$id', '$pw_encode', '$email', '$phone')";
mysqli_query($db, $sql);
mysqli_close($db);

echo "<script>alert('회원가입 성공'); location.href='../login_html.html'";
?>
