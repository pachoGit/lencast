<?php

namespace App\Controllers;

use App\Controllers\BaseController;

/**
 * Clase de gestion de acceso directo a algunas rutas necesarias para la aplicacion
 */
class Rutas extends BaseController
{
    // Ruta hacia los recursos de la pagina web principal
    public static $RWEB = "public/web/";

    // Ruta hacia los recursos de la pagina del administrador
    public static $RADMIN = "public/admin/";
}
