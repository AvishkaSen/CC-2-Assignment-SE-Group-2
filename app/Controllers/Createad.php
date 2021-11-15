<?php

namespace App\Controllers;

class Createad extends BaseController
{
    public function index()
    {
        return view('createad.php');
    }

    public function create()
    {
        $validation =  \Config\Services::validation(); // Validation library is loaded
        $addata = $this->request->getPost(); // Gets data from the registration form's post method
    
        if($validation->run($addata, 'adverts')) { // LOADS AND CHECKS A SET OF CUSTOM FORM VALIDATIONS THAT I HAVE CREATED IN "app/Config/Validation.php" FILE!!

            // If the validations are successful
            
            $ads = new \App\Entities\Ads($this -> request ->getPost());


            // Inserts registration form data into the database
            $model = new \App\Models\adModel;
            $model->insert($ads); 
            
            // CREATING THE SESSION AND SAVING ads INFO INTO IT
            $session = session(); // initialize the session
            $session->set('jobname', $ads -> jobname); 
            $session->set('category', $ads -> category); 
            $session->set('description', $ads -> description); 
            
            return view('createad'); 

        } else {

            // if the validations fail
            
            echo "<b style='color:white;'> Error: </b>";
            echo "<br><br>";

            $errorArray = $validation->getErrors(); // Loads an array of the custom error messages I created in "app/Config/Validation.php" file!!
            echo "<b style='color:white;'> ". implode("<br>", $errorArray) . "</b>"; // Then I display the list of errors in an echo 
            echo "<br><br>";
            
            return view('createad'); 

        }

    }
    
    public function delete($id)
    {
        $model = new \App\Models\adModel;
        $model->delete($id);
        return view('myads');
    }
}
?>