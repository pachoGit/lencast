<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Productos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_producto" => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "id_proveedor"    => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
            ],
            "id_destacado" => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
            ],
            "nombre_producto" => [
                "type"         => "VARCHAR",
                "constraint"   => 100,
                "null"         => true
            ],
            "descripcion_producto" => [
                "type"       => "VARCHAR",
                "constraint" => 250,
                "null"       => true
            ],
            "precio_sugerido" => [
                "type"       => "INT",
                "constraint" => 5,
                "null"       => true
            ],
            "utilidad" => [
                "type"       => "INT",
                "constraint" => 100,
                "null"       => true
            ],
            "talla" => [
                "type"       => "VARCHAR",
                "constraint" => 5,
                "null"       => true
            ],
            "stock" => [
                "type"       => "INT",
                "constraint" => 5,
                "null"       => true
            ],
            "estado_producto" => [
                "type"       => "INT",
                "constraint" => 5,
                "default"    => 1
            ]
        ]);

        $this->forge->addKey("id_producto", true);
        $this->forge->addForeignKey("id_proveedor", "proveedores", "id_proveedor");
        $this->forge->addForeignKey("id_destacado", "destacado", "id_destacado");
        $this->forge->createTable("productos", true);
    }

    public function down()
    {
        $this->forge->dropTable("productos", true);
    }
}
