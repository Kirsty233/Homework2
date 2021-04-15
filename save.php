<?php

    $content = $_POST['content'];
    $username = $_POST['username'];

   // var_dump($content, $username);

    if(trim($content)=='' or trim($username)==''){
        echo "<h1 align='center'>!!!!用户名，留言内容不能为空!!!!<h1>";
        $file=fopen("image/2.jpg","r");
        exit;
    }

    if($username == 'admin'||$username=='root' ||$username=='领导人'){
        echo '用户名不能为敏感字';
        exit;
    }

    include('db.php');
    // $dsn='mysql:dbname=firstsave;localhost';
    // $pdo =new PDO($dsn, 'root' ,'');

    // var_dump($pdo);

$sql= " insert into message (username,content) values('{$username}','{$content}')" ;

write($pdo,$sql);


header('location:index.php');//跳转回首页

?>