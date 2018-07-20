<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
echo $id.$pw;
if('junseok' == $id and '1234' == $pw)
  echo"<script>alert('로그인 성공'); location.href='../Main_html.html';</script>";
else
  echo"<script>alert('비밀번호가 틀렸습니다. '); history.go(-1);</script>";
?>
