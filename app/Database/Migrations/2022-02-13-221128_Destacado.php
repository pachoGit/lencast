<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Destacado extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_destacado" => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "una_estrella" => [
                "type"           => "INT",
                "constraint"     => 5,
                "default"        => 0
            ],
            "dos_estrella" => [
                "type"           => "INT",
                "constraint"     => 5,
                "default"        => 0
            ],
            "tres_estrella" => [
                "type"           => "INT",
                "constraint"     => 5,
                "default"        => 0
            ],
            "cuatro_estrella" => [
                "type"           => "INT",
                "constraint"     => 5,
                "default"        => 0
            ],
            "cinco_estrella" => [
                "type"           => "INT",
                "constraint"     => 5,
                "default"        => 0
            ]
        ]);
        
        $this->forge->addKey("id_destacado", true);
        $this->forge->createTable("destacado", true);
    }

    public function down()
    {
        $this->forge->dropTable("destacado", true);
    }
}
