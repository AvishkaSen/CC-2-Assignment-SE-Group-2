<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureSeekers</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/background.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/login.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
    <div class="heading">
        <h1>FutureSeekers</h1>
    </div>
    <div class="content">
        <div class="bx1">
        <img src="<?php echo base_url(' /assets/img/bg-login.png') ?>" alt="bg-login" class="bg-login">
        </div>
        <div class="form">
            <h2>Login Here</h2>
            <div>
                <form action="<?php echo base_url('Login/create')?>" method="POST"  class="bx2">
                    <input type="email" name="email" placeholder="Enter Email">
                    <input type="password" name="password" placeholder="Enter Password">
                    <input type="submit" value="Login" class="btn reg">
                    <p class="link">Don't have an account</p>
                    <a class="reg" href="<?php echo base_url('Register/index')?>">Register Here</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

