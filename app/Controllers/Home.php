<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing.php');
    }

    public function CompanyHome()
    {
        return view('Company.php');
    }

    public function ApplicantHome()
    {
        return view('Applicant.php');
    }
}
?>