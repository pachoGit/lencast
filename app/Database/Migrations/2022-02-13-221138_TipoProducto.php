<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipoProducto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_tipo_producto"     => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            "nombre_tipo_producto" => [
                "type"       => "VARCHAR",
                "constraint" => 100,
                "null"       => true
            ],
            "estado_tipo_producto" => [
                "type"       => "INT",
                "constraint" => 5,
                "default"    => 1
            ]
        ]);
        
        $this->forge->addKey("id_tipo_producto", true);
        $this->forge->createTable("tipo_producto", true);
    }

    public function down()
    {
        $this->forge->dropTable("tipo_producto", true);
    }
}
