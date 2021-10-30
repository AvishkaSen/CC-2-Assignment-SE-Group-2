<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function index()
    {
        // Redirects the user to the login page when the button is clicked in the home page
        return view('login.php');  
    }
    //validation must be checked
    /*
    public function create(){
			
			$model = new \App\Models\userModel; // Gets the database

			// Gets the email and password values from the form
			$email = $this->request->getPost('email'); 
			$password = $this->request->getPost('password'); 

			$user = $model->where('email', $email) -> first();


			// Checks if the user exists and if the relevant password matches with the specific user
			if($user !== null && password_verify($password, $user->password)) 
			{
				// If login was successful

				// CREATING THE SESSION AND SAVING USER INFO INTO IT
				$session = session(); // initialize the session
				$session->set('UserID', $user -> id); 
				$session->set('Name', $user -> name); 
				$session->set('Email', $user -> email); 
				$session->set('PhoneNo', $user -> phone_no);  
				$session->set('Dob', $user -> dob); 


				return view("Welcome/index"); // goes to the welcome page after a successful login

			}
			else {

				// if login was not sucessful, displaying error
				echo "<b style='color:red;'> Error: </b>";
				echo "<br><br>";
				echo "<b style='color:red;'> LOGIN WAS NOT SUCCESSFUL! PLEASE DOUBLE CHECK YOUR ENTRIES! </b> <br>";
				echo "<b style='color:red;'> OR USER DOES NOT EXIST! </b>";
				echo "<br><br>";
				
				return view("Login/index");

		}
    }*/
}
?>