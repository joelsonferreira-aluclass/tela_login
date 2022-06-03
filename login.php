<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Controle de acesso</title>
</head>

<body>
    <form class="form form-signin  justify-content-center" action="logar.php" method="POST">
        <div class="card">
            <div class="card-body">
                <div class="text-center ">
                    <i class="imglogin mb-0 bi bi-person-fill"></i>
                    <!-- <i class="imglogin glyphicon large glyphicon-user"></i> -->
                    <h1 class="h3 mb-3 font-weight-normal">Painel de controle</h1>
                </div>
                </div>
                <div class="form-label-group card-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address"
                        required autofocus>
                </div>
                <div class="form-label-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control"
                        placeholder="Password" required>

                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <div class="card-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                </div>
            </div>

        </div>

    </form>
</body>

</html>