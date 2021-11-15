<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Adverts extends Migration
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
            'jobname'=>[ // registration name section
                'type'=>'VARCHAR',
                'constraint'=>255,
            ], 
            'category'=>[ // job catergory section
                'type'=>'VARCHAR',
                'constraint'=>255,
            ], 
            'description'=>[ // description section
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],            
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Adverts');
    }

    public function down()
    {
        // drops table when running the cmd command 'php spark migrate:rollback'
        $this->forge->dropTable('Adverts'); 
    }
}
