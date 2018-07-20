<?php
$id=$_POST['id'];
$pw=$_POST['pw'];

$db = mysqli_connect('localhost', 'root', 'autoset', 'user');
if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL: ".mysqli_connect_errno();
}

$pw_encode = md5($pw);
$table_name = "user";
$sql = "SELECT pw FROM $table_name WHERE id='$id'";

if($result = mysqli_query($db, $sql))
{
  if(mysqli_num_rows($result) == 0)
  {
      echo "<script>alert('No matched ID.');</script>";
      echo "<script>window.location.replace('../login_html.html');</script>";
  }
  else
  {
      $row = mysqli_fetch_assoc($result);
      if($row["pw"] == $pw_encode) // 로그인 성공
      {
        // 리디렉션
          echo "<script>alert('Login Succeed.');</script>";
          echo "<script>location.href='../Main_html.html';</script>";
      }
      else
      {
          echo "<script>alert('Wrong Password.');</script>";
          echo "<script>window.location.replace('../login_html.html');</script>";
      }
  }
}

mysqli_free_result($result);
mysqli_close($db);
?>
