<?php include "function.php"; ?>
<?php include "../app_sipat/config.php"; ?>
<?php

if (isset($_SESSION['login'])) {
    header("Location: " . BASEURL);
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-transparent mb-0">
                        <h5 class="text-center">M4S <span class="font-weight-bold text-primary">LOGIN</span></h5>
                    </div>
                    <div class="card-body">
                        <?php pesan_login(); ?>
                        <form action="action.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username / Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
                            </div>
                            <div class="form-group mt-2">
                                <a href="register.php">Create your account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
<?php if (isset($_SESSION))  unset($_SESSION['berhasil']); ?>