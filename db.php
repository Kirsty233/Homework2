<?php
// $content = $_POST['content'];
// $username =$_POST['username'];

// var_dump($content,$username);

$dsn='mysql:dbname=firstsave;localhost';
$pdo =new PDO($dsn, 'root' ,'');
// var_dump($pdo);

// $sql= " insert into message (username,content) values('{$username}','{$content}')" ;
// $sth=$pdo->prepare($sql);
// $sth->execute();

// $sth=$pdo->prepare($sql);
// $sth->execute();

// $sql="select* from message";
// $sth=$pdo->prepare($sql);
// $sth->execute();
// $data=$sth->fetchAll();
// var_dump($data[0]['username']);

function write($pdo,$sql)
{
    $sth = $pdo->prepare($sql);
    return $sth->execute();
}

function read($pdo,$sql){
    $sth=$pdo->prepare($sql);
    $sth->execute();
    $rows=$sth->fetchAll();
    return $rows;
}

?>