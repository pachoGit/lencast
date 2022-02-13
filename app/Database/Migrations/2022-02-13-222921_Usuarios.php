<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_usuario" => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "id_tipo_usuario"    => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
            ],
            "nombre_usuario" => [
                "type"       => "VARCHAR",
                "constraint" => 100,
                "null"       => true
            ],
            "apellido_usuario" => [
                "type"         => "VARCHAR",
                "constraint"   => 100,
                "null"         => true
            ],
            "nick" => [
                "type"       => "VARCHAR",
                "constraint" => 100,
                "null"       => true
            ],
            "password" => [
                "type"       => "VARCHAR",
                "constraint" => 100,
                "null"       => true
            ],
            "foto" => [
                "type"       => "VARCHAR",
                "constraint" => 100,
                "null"       => true
            ],
            "estado_usuario" => [
                "type"       => "INT",
                "constraint" => 5,
                "default"    => 1
            ]
        ]);

        $this->forge->addKey("id_usuario", true);
        $this->forge->addForeignKey("id_tipo_usuario", "tipo_usuarios", "id_tipo_usuario");
        $this->forge->createTable("usuarios", true);
    }

    public function down()
    {
        $this->forge->dropTable("usuarios", true);
    }
}
