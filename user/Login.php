<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dormitory</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/LoginStyle.css">
    <script src="../js/jquery-2.2.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            padding-top: 20px;
            padding-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="../index.html">
            <button type="button" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            </button>
        </a>
        <div class="page-header">
            <h1 style="color:#9e76b2" ;=>Dormitory <small>Login</small></h1>
            <a href="index.html">
                <button type="button" class="btn btn-default btn-lg" style="position: fixed;right:100px;top:40px;">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                </button>
            </a>
        </div>
        <div class="row">
            <form class="form-signin" action="./login" method="POST">
                <div class="panel panel-default">
                    <div class="panel-heading">Log In</div>
                    <div class="panel-body">
                        <input type="hidden" name="next" value="/">
                        <label for="inputUsername" class="sr-only">Username</label>
                        <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                        <button class="btn btn-default btn-primary btn-block" type="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/j
    query.min.js"></script>
</body>

</html>
