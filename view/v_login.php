<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/css/custom.css">
        <script type="text/javascript" src="../asset/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    </head>

    <body>

        <!-- form login -->
        <div class="col-sm-4 well col-sm-push-4 login">
            <div>
                <h3 style="text-align:center;"><a href="../index.php">Harvest Store</a></h3>
            </div>
            <form action="" method="POST" class="col-sm-10 col-sm-push-1">
                <div class="form-login">
                    <label>username</label>
                    <input type="text" class="form-control" name="username"  placeholder="username" required autofocus>
                </div>
                <div class="form-login">
                    <label>password</label>
                    <input type="password" class="form-control" name="password" placeholder="password" required>
                </div>
                <div class="btn-login">
                    <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
                </div>
            </form>
        </div>

    </body>

</html>
