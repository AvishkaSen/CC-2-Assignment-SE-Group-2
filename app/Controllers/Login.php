<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function index()
    {
        // Redirects the user to the login page when the button is clicked in the home page
        return view('login.php');  
    }
  
    public function create(){
			
			$model = new \App\Models\userModel; // Gets the database

			// Gets the email and password values from the form
			$email = $this->request->getPost('email'); 
			$password = $this->request->getPost('password'); 
			//$type = $this->request->getPost('type'); 

			$user = $model->where('email', $email) -> first();


			// Checks if the user exists and if the relevant password matches with the specific user
			if($user !== null && password_verify($password, $user->password)) 
			{
				// If login was successful
		
				// CREATING THE SESSION AND SAVING USER INFO INTO IT
				$session = session(); // initialize the session
				$session->set('UserID', $user -> id); 
				$session->set('First Name', $user -> fname); 
				$session->set('Last Name', $user -> lname); 
				$session->set('Email', $user -> email); 
				$session->set('Type of User', $user -> type);

				//return view("home");
				
				if($_SESSION["Type of User"] == "Applicant")
				{
					//if the user is registered as an applicant he/she is directed to the Applicant home page
					//$this->load->view('Applicant');
					return view("Applicant");
				}
				else if($_SESSION["Type of User"] == "Company")
				{
					//if the user is registered as an applicant he/she is directed to the Applicant home page
					//$this->load->view('Company');
					return view("Company");
				}
				
				else if($_SESSION["Type of User"] == "Admin")
				{
					//if the user is registered as an applicant he/she is directed to the Applicant home page
					//$this->load->view('Admin');
					return view("Admin");
				}
				 // goes to the welcome page after a successful login
				 //return view("WelcomeApplicant/index");
			}
			else {

				// if login was not sucessful, displaying error
				//css design
				echo "<b style='color:red; 
				background:#fff; 
				border-radius:20px;'> Error: </b>";
				echo "<br><br>";
				echo "<b style='color:red;
				background:#fff;
				border-radius:20px;'> LOGIN WAS NOT SUCCESSFUL! PLEASE DOUBLE CHECK YOUR ENTRIES! </b> <br>";
				echo "<b style='color:red;
				background:#fff;
				border-radius:20px;'> OR USER DOES NOT EXIST! </b>";
				echo "<br><br>";
				
				return view("login");

		}
    }
}
?>

