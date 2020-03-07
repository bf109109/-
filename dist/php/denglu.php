<?php
$shouji = $_POST['shouji'];
$password = $_POST['password'];

header('content-type: text/html;charset=utf-8;');

  // 连接数据库
  $link = mysqli_connect('localhost', 'root', 'root', 'user');

  // 执行 sql 语句了
  //   执行一条插入的语句
   $res = mysqli_query($link, "SELECT * FROM `biao3` WHERE `shouji-num`='$shouji' AND `password`='$password'");

  //   执行第二种插入的 sql 语句
  //$res = mysqli_query($link, 'INSERT INTO `users` (`name`, `age`) VALUES("管理员2", 22)');
  $data = mysqli_fetch_all($res, MYSQL_ASSOC);
  // 输出结果看一下
  //   true 表示插入成功
  
  if ($data) {
    // 告诉浏览器跳转页面
    echo 0;// , json_encode($data)
    
  } else {
    echo '用户名或密码错误!';
  }

?>