<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $model =new \App\Models\adModel();//gets the database
        
        $adverts=$model;
        $session = session(); // initialize the session
				$session->set('id', $adverts -> id); 
				$session->set('jobname', $adverts -> jobname); 
				$session->set('category', $adverts -> category); 
				$session->set('description', $adverts -> description); 
				

        return view('adminads');
    }

    public function delete(){
        //delete an ad function
    }
}