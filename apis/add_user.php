<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$db = mysqli_connect('localhost', 'root', 'autoset', 'dasom');
if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL: ".mysqli_connect_errno();
}

$pw_encode = md5($pw);
$table_name = "user";
$sql = "INSERT INTO $table_name (`id`, `password`, `email`, `phoneNumber`) VALUES ('$id', '$pw_encode', '$email', '$phone')";
mysqli_query($db, $sql);
mysqli_close($db);

echo "<script>alert('회원가입 성공'); location.href='../login_html.html'";
?>
