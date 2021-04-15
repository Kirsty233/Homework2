<?php
include('db.php');
$sql = "SELECT * FROM `message` ORDER BY id DESC";

$rows = read($pdo, $sql);
//var_dump($rows);


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<html>

<head>

    <title>yy的留言板</title>
    <meta charset='utf-8' />
    <style>
        .msg {
            border: solid 1.5px #fff;
            border-radius: 5px;
            margin-top: 10px;
            padding: 5px;
            color:mintcream;
        

        }

        input::-webkit-input-placeholder { 
color: #999; 
-webkit-transition: color.5s; 
} 
input:focus::-webkit-input-placeholder, input:hover::-webkit-input-placeholder { 
color: #fff; 
-webkit-transition: color.5s; 
}

    </style>
</head>

<body>
<body background="image/1.jpg"
style="background-repeat:no-repeat;
background-size:100% 100%;
background-attachment:fixed;">

</div>



    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">欢迎来到我的留言板!</h1>
            <p class="lead">这是我的第一个作品，欢迎大家都来玩！</p>


        </div>

        <div class='add'>
            <form action="save.php" method='POST'>
                <div class='row'>
                    <div class='col-12'>
                        <div class="form-group">
                            <textarea name='content' 
                            type= "text" placeholder="请输入留言内容"
                            class="form-control" rows='4' ;
                            ></textarea>


                        </div>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-3'>
                        <div class="form-group">
                            <input type="text" placeholder="请输入用户名" name='username' class='form-control' type='text' 
                            />
                        </div>
                    </div>
                    <div class='col-9 d-flex'>
                        <div class="form-group ml-auto">
                            <input class='btn btn-primary' type='submit' value='提交'  />
                        </div>
                    </div>

                    <div style='clear:both;'></div>
                </div>
            </form>
        </div>

        <div class='list'>
            <?php
            foreach ($rows as $key => $msg) {
            ?>

            <div class='msg'>
                <p>用户名:<?php echo $msg['username'];?></p>
                <p><?php echo $msg['content'];?></p>
            </div>
            <?php
            }
            ?>

        </div>
    </div>


</body>

</html>