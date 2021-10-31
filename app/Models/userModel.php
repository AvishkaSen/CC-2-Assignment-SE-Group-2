<?php

    namespace App\Models;

    use CodeIgniter\CodeIgniter;

    class userModel extends \CodeIgniter\Model 
    {

        protected $table = 'registrations'; // Give the table name

        // List the columns from the database that we want to use. id is autoincremented, so its not necessary. 
        protected $allowedFields=['fname', 'lname', 'email', 'password', 'type']; 
        protected $returnType = 'App\Entities\Users';

    }

?>