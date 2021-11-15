<?php

namespace App\Controllers;
use App\Models\adModel;

class Jobs extends BaseController
{
    public function index()
    {
        //redirects to ad creating page
        $adModel = new adModel();
        $data['adverts'] = $adModel->findAll();
        return view('jobs.php',$data);
    }
}
?>