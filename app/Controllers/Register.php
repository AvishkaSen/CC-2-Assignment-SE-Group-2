<?php

namespace App\Controllers;

class Register extends BaseController
{

    public function index()
    {
        // Redirects the user to the register page when the button is clicked in the home page
        return view('register.php');  
    }
    

    public function create() {

        $validation =  \Config\Services::validation(); // Validation library is loaded
        $formdata = $this->request->getPost(); // Gets data from the registration form's post method
    
        if($validation->run($formdata, 'registration')) { // LOADS AND CHECKS A SET OF CUSTOM FORM VALIDATIONS THAT I HAVE CREATED IN "app/Config/Validation.php" FILE!!

            // If the validations are successful
            
            $users = new \App\Entities\Users($this -> request ->getPost());
            $users -> password = password_hash($users->password, PASSWORD_DEFAULT); // Hashes the password

            // Inserts registration form data into the database
            $model = new \App\Models\userModel;
            $model->insert($users); 
            
            return view('login'); 

        } else {

            // if the validations fail
            
            echo "<b style='color:white;'> Error: </b>";
            echo "<br><br>";

            $errorArray = $validation->getErrors(); // Loads an array of the custom error messages I created in "app/Config/Validation.php" file!!
            echo "<b style='color:white;'> ". implode("<br>", $errorArray) . "</b>"; // Then I display the list of errors in an echo 
            echo "<br><br>";
            
            return view('register'); 

        }

    }
}
?>