<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Compras extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_compra" => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "id_usuario"    => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
            ],
            "fecha_compra" => [
                "type"         => "DATE",
                "constraint"   => 100,
                "null"         => true
            ],
            "sub_total_compra" => [
                "type"       => "INT",
                "constraint" => 5,
                "null"       => true
            ],
            "total_compra" => [
                "type"       => "INT",
                "constraint" => 5,
                "null"       => true
            ],
            "estado_compra" => [
                "type"       => "INT",
                "constraint" => 5,
                "default"    => 1
            ]
        ]);

        $this->forge->addKey("id_compra", true);
        $this->forge->addForeignKey("id_usuario", "usuarios", "id_usuario");
        $this->forge->createTable("compras", true);
    }

    public function down()
    {
        $this->forge->dropTable("compras", true);
    }
}
