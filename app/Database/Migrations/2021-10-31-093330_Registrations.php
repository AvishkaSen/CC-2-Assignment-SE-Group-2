<?php

    namespace App\Database\Migrations;

    use CodeIgniter\Database\Migration;

    class Registrations extends Migration
    {
        public function up()
        {
            $this->forge->addField([

                'id'=>[
                    'type'=>'INT',
                    'constraint'=>5,
                    'unsigned'=>true,
                    'auto_increment'=>true
                ],
                'fname'=>[ // First name section
                    'type'=>'VARCHAR',
                    'constraint'=>255
                ], 
                'lname'=>[ // last name section
                    'type'=>'VARCHAR',
                    'constraint'=>255
                ], 
                'email'=>[ // email section
                    'type'=>'VARCHAR',
                    'constraint'=>100,
                    'unique'=>true
                ],
                'password'=>[ // password section
                    'type'=>'VARCHAR',
                    'constraint'=>60
                ],
                'type'=>[
                    'type'=>'VARCHAR',
                    'constraint'=> 100
                ],
                
            ]);

            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('Registrations'); 
            
        }

        public function down()
        {
            // drops table when running the cmd command 'php spark migrate:rollback'
            $this->forge->dropTable('Registrations'); 
        }
        
    }

?>