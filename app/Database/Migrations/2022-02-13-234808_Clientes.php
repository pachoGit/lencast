<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_cliente" => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "id_tipo_cliente"    => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
            ],
                "dni"            => [
                "type"           => "VARCHAR",
                "constraint"     => 8,
                "unsigned"       => true,
            ],
                "ruc"            => [
                "type"           => "VARCHAR",
                "constraint"     => 11,
                "unsigned"       => true,
            ],
            "nombre_cliente" => [
                "type"       => "VARCHAR",
                "constraint" => 100,
                "null"       => true
            ],
            "apellido_cliente" => [
                "type"         => "VARCHAR",
                "constraint"   => 100,
                "null"         => true
            ],
            "estado_cliente" => [
                "type"       => "INT",
                "constraint" => 5,
                "default"    => 1
            ]
        ]);

        $this->forge->addKey("id_cliente", true);
        $this->forge->addForeignKey("id_tipo_cliente", "tipo_clientes", "id_tipo_cliente");
        $this->forge->createTable("clientes", true);
    }

    public function down()
    {
        $this->forge->dropTable("clientes", true);
    }
}
