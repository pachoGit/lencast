<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipoCliente extends Migration
{
    public function up()
    {
        $this->forge->addField([
            // Nombre del campo y sus atributos
            "id_tipo_cliente" => [
                "type"           => "INT",
                "constraint"     => 5,
                "unsigned"       => true,
                "auto_increment" => true
            ],
            // Nombre del campo y sus atributos
            "nombre_tipo_cliente" => [
                "type"       => "VARCHAR",
                "constraint" => 100,
                "null"       => true
            ],
            // Nombre del campo y sus atributos
            "estado_tipo_cliente" => [
                "type"       => "INT",
                "constraint" => 5,
                "default"    => 1
            ]
        ]);

        $this->forge->addKey("id_tipo_cliente", true); // Agregar la llave primaria
        $this->forge->createTable("tipo_clientes", true); // Crear la tabla
    }

    public function down()
    {
        // Cuando ejecutamos php spark migrate:refresh se ejecuta esta parte para borrar la tabla
        $this->forge->dropTable("tipo_clientes", true);
    }
}
