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
                        <h2>Register Here:</h2>
                    </div>

                    <form class="frm" action=<?php echo site_url('Register/Create')?> method="post">

                        
                        <input type="text" name="fname" id="fname" placeholder="First Name"> <!-- First Name -->
                        <br>
                        
                        <input type="text" name="lname" id="lname" placeholder="Last Name"> <!-- Last Name -->
                        <br>
                        
                        <input type="text" name="email" id="email" placeholder="E-mail Address"> <!-- Email -->
                        <br>
                        
                        <input type="password" name="password" id="password" placeholder="Password"> <!-- Password -->
                        <br>
                        
                        <input type="password" name="pass_confirm" id="pass_confirm" placeholder="Confirm Password"> <!-- Confirm Password -->
                        <br>

                        <div class="choice"> 
                            <input type="radio" name="type" value="Company"> <span>Company</span>
                            <input type="radio" name="type" value="Applicant"> <span>Applicant</span>
                        </div>

                        <input type="submit" value="Submit" class="button">
                        <br><br>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>