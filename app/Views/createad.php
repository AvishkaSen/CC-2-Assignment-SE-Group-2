<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureSeekers</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>"> 
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/background.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/nav.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/createad.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/footer.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--bootstrap css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Nav -->
    <header>
        <h1 class="heading">FutureSeekers</h1>
        <nav>
            <ul class="nav-links">
                <li><a href="<?php echo base_url('Home/CompanyHome')?>">Home</a></li>
                <li><a href="<?php echo base_url('Postings/index')?>">My Adverts</a></li>
                <li><a href="<?php echo base_url('Createad/index')?>">Create Job Advert</a></li>
                <li><a href="<?php echo base_url('')?>">About Us</a></li>
                <li><a href="<?php echo base_url('')?>">Contact Us</a></li>
            </ul>
        </nav>
        <a href="#" class="cta">Logout</a>
    </header>

    <!--Create ad Form -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Add Job Advertisment
                    </div>
                    <div class="card-body ">
                        <form action="<?php echo base_url('Createad/create')?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label>Job Title</label>
                                        <input type="text" name="jobname" class="form-control" required placeholder="Enter Job Title">
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label>Catergory</label>
                                        <select class="form-select" name="category">
                                            <option selected>Select a category</option>
                                            <option value="Administration, business and management">Administration, business and management</option>
                                            <option value="Alternative therapies">Alternative therapies</option>
                                            <option value="Animals, land and environment">Animals, land and environment</option>
                                            <option value="Computing and ICT">Computing and ICT</option>
                                            <option value="Construction and building">Construction and building</option>
                                            <option value="Design, arts and crafts">Design, arts and crafts</option>
                                            <option value="Education and training">Education and training</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="Facilities and property services">Facilities and property services</option>
                                            <option value="Financial services">Financial services</option>
                                            <option value="Garage services">Garage services</option>
                                            <option value="Hairdressing and beauty">Hairdressing and beauty</option>
                                            <option value="Healthcare">Healthcare</option>
                                            <option value="Heritage, culture and libraries">Heritage, culture and libraries</option>
                                            <option value="Hospitality, catering and tourism">Hospitality, catering and tourism</option>
                                            <option value="Languages">Languages</option>
                                            <option value="Legal and court services">Legal and court services</option>
                                            <option value="Manufacturing and production">Manufacturing and production</option>
                                            <option value="Performing arts and media">Performing arts and media</option>
                                            <option value="Print and publishing, marketing and advertising">Print and publishing, marketing and advertising</option>
                                            <option value="Retail and customer services">Retail and customer services</option>
                                            <option value="Science, mathematics and statistics">Science, mathematics and statistics</option>
                                            <option value="Security, uniformed and protective services">Security, uniformed and protective services</option>
                                            <option value="Social sciences and religion">Social sciences and religion</option>
                                            <option value="Social work and caring services">Social work and caring services</option>
                                            <option value="Sport and leisure">Sport and leisure</option>
                                            <option value="Transport, distribution and logistics">Transport, distribution and logistics</option>
                                        </select>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" placeholder="Enter Description" required></textarea>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-primary px-4 float-end">Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
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
    <!--js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
