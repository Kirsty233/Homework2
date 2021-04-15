<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>留言板</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">欢迎来到我的留言板!</h1>
            <p class="lead">这是我的第一个作品，欢迎大家都来玩！</p>


        </div>
        <div class='row'>
            <div class='col-12'>
                <div class="form-group">
                    <textarea name='content' class="form-control" rows='4'></textarea>
                </div>
            </div>
            <div class='col-3'>
                <div class="form-group">
                    <input name='username' class='form-control' type='text' />
                </div>
            </div>
            <div class='col-9 d-flex'>
                <div class="form-group ml-auto">
                    <input class='btn btn-primary' type='submit' value='提交' />
                </div>
            </div>
            <div class='row'>
                <div class='col-12'>
                    <div class='border rounded p-2'>
                        <div class='text-primary'>用户名</div>
                        <div>内容</div>
                    </div>
                    <div class='border rounded p-2'>
                        <div class='text-primary'>用户名</div>
                        <div>内容</div>
                    </div>
                    <div class='border rounded p-2'>
                        <div class='text-primary'>用户名</div>
                        <div>内容</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>