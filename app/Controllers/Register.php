<?php

namespace App\Controllers;

class Register extends BaseController
{

    public function index()
    {
        // Redirects the user to the register page when the button is clicked in the home page
        return view('register.php');  
    }
    
    // validation must be checked
    /*
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
            
            // For the sessions
            $email = $this->request->getPost('email');
            $user = $model->where('email', $email) -> first();

            // CREATING THE SESSION AND SAVING USER INFO INTO IT
            $session = session(); // initialize the session
            $session->set('UserID', $user -> id); 
            $session->set('Name', $user -> name); 
            $session->set('Email', $user -> email);  
            $session->set('PhoneNo', $user -> phone_no);  
            $session->set('Dob', $user -> dob);  
            
            // Redirects user to the Welcome page upon successful registration
            return redirect()->to("/Welcome/index"); 

        } else {

            // if the validations fail
            
            echo "<b style='color:red;'> Error: </b>";
            echo "<br><br>";

            $errorArray = $validation->getErrors(); // Loads an array of the custom error messages I created in "app/Config/Validation.php" file!!
            echo "<b style='color:red;'> ". implode("<br>", $errorArray) . "</b>"; // Then I display the list of errors in an echo 
            echo "<br><br>";
            
            return view('Register/index'); 

        }

    }*/
}
?>