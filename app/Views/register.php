<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureSeekers</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/background.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/register.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <div class="heading">
        <h1>FutureSeekers</h1>
    </div>
    <div class="card">
        <div class="details">
            <div class="content">
                <div class="head">
                    <h2>Register Here</h2>
                </div>
                <div>
                    <!--the place holder and input feilds colors should be changed-->
                    <form class="frm" action="<?php echo base_url('Register/Create')?>" method="POST">
                        <input type="text" name="firstN" placeholder="First Name">
                        <input type="text" name="lastN" placeholder="Last Name">
                        <input type="email" name="email" placeholder="Email">
                        <span>Date of Birth </span><input type="date" name="dob" class="dbo">
                        <input type="password" name="password" placeholder="Password">
                        <input type="password" name="passwordC" placeholder="Confirm Password">
                        <div class="choice">
                        <input type="checkbox" name="company" id="company"><span>Company</span>
                        <input type="checkbox" name="applicant" id="applicant"><span>Applicant</span>
                        </div>
                        <input type="submit" value="Submit" class="button">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>