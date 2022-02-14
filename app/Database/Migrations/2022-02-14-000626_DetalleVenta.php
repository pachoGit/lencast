<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetalleVenta extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_detalle_venta" => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "id_venta" => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "id_producto"        => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
            ],
        ]);

        $this->forge->addKey("id_detalle_venta", true);
        $this->forge->addForeignKey("id_venta", "ventas", "id_venta");
        $this->forge->addForeignKey("id_producto", "productos", "id_producto");
        $this->forge->createTable("detalle_venta", true);
    }

    public function down()
    {
        $this->forge->dropTable("detalle_venta", true);
    }
}
