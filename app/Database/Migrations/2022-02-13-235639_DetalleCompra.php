<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetalleCompra extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_detalle_compra" => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "id_producto"    => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
            ],
            "id_compra"    => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
            ],
            "cantidad"   => [
                "typ"        => "INT",
                "constraint" => 5,
                "null"       => true
            ],
            "estado_detalle_compra" => [
                "type"       => "INT",
                "constraint" => 5,
                "default"    => 1
            ]
        ]);

        $this->forge->addKey("id_detalle_compra", true);
        $this->forge->addForeignKey("id_producto", "productos", "id_producto");
        $this->forge->addForeignKey("id_compra", "compras", "id_compra");
        $this->forge->createTable("detalle_compra", true);
    }

    public function down()
    {
        $this->forge->dropTable("detalle_compra", true);
    }
}
