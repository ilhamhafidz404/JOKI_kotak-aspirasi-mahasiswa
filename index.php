<?php
require "backend/login.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width:500px;
        }
        .alert {
            width: 70%;
            margin: auto;
            margin-top: 100px;
        }
    </style>
  </head>
  <body class="bg-light">

    <?php if(isset($_GET['error'])) : ?>
        <div class="alert alert-danger" role="alert">
            Gagal Login, coba lagi
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <form method="POST" action="./backend/login.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>