<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <div id="login">
        <h3 class="text-center text-white pt-5">Register Form</h3>

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">

                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form action="" id="login-form" method="post">
                            <h3 class="txt-center text-info">Register</h3>
                            <div class="form-group">
                                <label for="username" class="txt-info">Username</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="password" class="txt-info">Password</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="registerSubmit" class="btn btn-info btn-md" value="submit">
                            </div>

                            <div id="reg_link" class="text-right">
                                <a href="?login=true" class="text-info">Login here</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>