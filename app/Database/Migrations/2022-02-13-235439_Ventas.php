<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ventas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_venta" => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "id_tipo_venta"      => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
            ],
            "id_cliente"         => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
            ],
            "id_usuario"         => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
            ],
            "fecha_venta"        => [
                "type"           => "DATE",
                "constraint"     => 8,
                "unsigned"       => true,
            ],
            "sub_total_venta"    => [
                "type"           => "INT",
                "constraint"     => 11,
                "unsigned"       => true,
            ],
            "igv"            => [
                "type"       => "INT",
                "constraint" => 100,
                "null"       => true
            ],
            "total_venta"      => [
                "type"         => "INT",
                "constraint"   => 100,
                "null"         => true
            ],
            "estado_venta"   => [
                "type"       => "INT",
                "constraint" => 5,
                "default"    => 1
            ]
        ]);

        $this->forge->addKey("id_venta", true);
        $this->forge->addForeignKey("id_tipo_venta", "tipo_ventas", "id_tipo_venta");
        $this->forge->addForeignKey("id_cliente", "clientes", "id_cliente");
        $this->forge->addForeignKey("id_usuario", "usuarios", "id_usuario");
        $this->forge->createTable("ventas", true);
    }

    public function down()
    {
        $this->forge->dropTable("ventas", true);
    }
}
