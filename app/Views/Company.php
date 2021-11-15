<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureSeekers</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/background.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/nav.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/home.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/footer.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <h1 class="heading">FutureSeekers</h1>
        <nav>
            <ul class="nav-links">
                <li><a href="<?php echo base_url('Home/CompanyHome')?>">Home</a></li>
                <li><a href="<?php echo base_url('Postings/index')?>">My Adverts</a></li>
                <li><a href="<?php echo base_url('Createad/index')?>">Create Job Advert</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <a href="#" class="cta">Logout</a>
    </header>
    <div class="bx1">
        <div>
            <img src="<?php echo base_url(' /assets/img/bg-company.png') ?>" alt="bg-img">
        </div>
        <div class="cnt1">
           <span>Job Vaccancies</span>
           <h2>Available <br> Job Postings</h2>
           <div class="wrapper">
            <div class="cnt3">
                <div class="search_wrap">
                    <div class="search-bx">
                        <input type="text" placeholder="Search">
                        <!--<input type="text" placeholder="Location">-->
                        <a href="#" class="btn-search"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
       </div>
        </div>
    </div>
    <!--Recently posted job adverts-->
    <div class="bx2">
        <h2>Recently Posted</h2>
        <div class="cnt2">
            <ul>
                <li><i class="fa fa-search"></i><a href="#">Bussiness Analyst</a></li>
                <li><i class="fa fa-search"></i><a href="#">Software Engineer</a></li>
                <li><i class="fa fa-search"></i><a href="#">Part-time</a></li>
                <li><i class="fa fa-search"></i><a href="#">Finance</a></li>
                <li><i class="fa fa-search"></i><a href="#">Work form home</a></li>
                <li><i class="fa fa-search"></i><a href="#">Administration</a></li>
                <li><i class="fa fa-search"></i><a href="#">Work from Home</a></li>
            </ul>
        </div>
    </div>
    <!--popular companies-->
    <div>
        <div class="bx3">
                <h2 class="bx3-head">Popular Companies</h2>
                <div class="cnt4">
                    <div class="card card1">
                        <div class="card-container">
                            <h3 class="card-title">
                                MAS Holdings
                            </h3>
                            <!--<p class="card-body">
                            MASS strives to create a self-sustained ecosystem in the global business arena.
                            </p>-->
                            
                            <a href="https://www.masholdings.com/" class="button">Learn more</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-container">
                            <h3 class="card-title">
                                Virtusa
                            </h3>
                            <!--<p class="card-body">
                            Every Virtusan is empowered to drive our clients forward through our PIRL values.
                            </p>-->
                            
                            <a href="https://www.virtusa.com/?utm_source=google&utm_medium=paid&utm_campaign=6756630412&utm_term=virtusa%20sri%20lanka&gclid=CjwKCAiA1aiMBhAUEiwACw25Mc5FxyWV__IzYnqp_IIh4vGB2WcrBtPOv4uyyi1BVdMgHovuoN7yPBoCviYQAvD_BwE" class="button">Learn more</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-container">
                            <h3 class="card-title">
                            John Keells Holdings
                            </h3>
                            <!--<p class="card-body">
                            John Keells Holdings PLC is Sri Lanka’s premier diversified company.
                            </p>-->
                            
                            <a href="https://www.keells.com/" class="button">Learn more</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-container">
                            <h3 class="card-title">
                            Commercial Bank
                            </h3>
                            <!--<p class="card-body">
                            To be the most technologically advanced, innovative and customer friendly financial services.
                            </p>-->
                            <a href="https://www.combank.lk/" class="button">Learn more</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!--Company Reviews

    <div class="review">
        <div class="inner">
            <h1>Company Reviews</h1>
            <div class="border"></div>

            <div class="row">
                <div class="col">
                    <div class="cmmnt">
                        <img src="" alt="">
                        <div class="name"></div>
                        <div class="stars">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat, adipisci! Repudiandae architecto suscipit voluptates voluptatem explicabo soluta ratione aperiam excepturi.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="cmmnt">
                        <img src="" alt="">
                        <div class="name"></div>
                        <div class="stars">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat, adipisci! Repudiandae architecto suscipit voluptates voluptatem explicabo soluta ratione aperiam excepturi.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="cmmnt">
                        <img src="" alt="">
                        <div class="name"></div>
                        <div class="stars">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat, adipisci! Repudiandae architecto suscipit voluptates voluptatem explicabo soluta ratione aperiam excepturi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!--footer-->
    <footer>
        <div class="row">
        <div class="col desc">
            <h2 class="logo">FutureSeekers</h2>
            <p>Best website to browse and find the perfect job offers suiting your qualifications and career goals</p>
        </div>
        <div class="col location">
            <h3 class="head">Visit us at</h3>
            <p>No. 388 Union Pl,</p>
            <p>Colombo,</p>
            <p>00200.</p>
            <p>0117 675 100</p>
        </div>
        <div class="col socials">
            <h3 class="head">Social Media</h3>
            <ul class="col-s">
                <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                <li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
                <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                <li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
            </ul>
        </div>
        <div class="col link">
        <h3 class="head">Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Career Details</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        </div>
        <p class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i> 2021 Group 2 Avishka . Dilki . Siduja . Yahya </p>
    </footer>
    </body>
</html>