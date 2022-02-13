<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Proveedores extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_proveedor"       => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "nombre_proveedor" => [
                "type"         => "VARCHAR",
                "constraint"   => 100,
                "null"         => true
            ],
            "telefono"       => [
                "type"       => "VARCHAR",
                "constraint" => 15,
                "null"       => true
            ],
            "estado_proveedor" => [
                "type"         => "INT",
                "constraint"   => 5,
                "default"      => 1
            ]
        ]);

        $this->forge->addKey("id_proveedor", true);
        $this->forge->createTable("proveedores", true);
    }

    public function down()
    {
        $this->forge->dropTable("proveedores", true);
    }
}
