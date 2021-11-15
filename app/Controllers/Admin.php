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


    public function users()
    {
        $model =new \App\Models\userModel();//gets the database
        
        $adverts=$model;
        $session = session(); // initialize the session
				$session->set('id', $adverts -> id); 
				$session->set('fname', $adverts -> fname); 
				$session->set('lname', $adverts -> lname); 
				$session->set('email', $adverts -> email);
				$session->set('type', $adverts -> type);
				

        return view('adminuser');
    }
    

    public function ads()
    {
        $model =new \App\Models\adModel();//gets the database
        
        $adverts=$model;
        $session = session(); // initialize the session
				$session->set('id', $adverts -> id); 
				$session->set('jobname', $adverts -> jobname); 
				$session->set('category', $adverts -> category); 
				$session->set('description', $adverts -> description); 
				

        return view('adminads.php');


        $model =new \App\Models\adModel();//gets the database
    
        $adverts=$model;
        
        $session = session(); // initialize the session
        $session->set('id', $adverts -> id); 
        $session->set('jobname', $adverts -> jobname); 
        $session->set('category', $adverts -> category); 
        $session->set('description', $adverts -> description); 
        
    
        return view('adminads.php');
    }


    // Admin deletes user account
    public function deleteuser($id)
    {
        $model = new \App\Models\userModel;
        $model->delete($id);
        return view('adminuser.php');
    }

    // Admin deletes job advertisements
    public function deletead($id)
    {
        $model = new \App\Models\adModel;
        $model->delete($id);
        return view('adminads.php');
    }

}