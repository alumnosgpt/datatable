<?php

namespace Controllers;

use Exception;
use Model\Detalle;
use MVC\Router;

class DetalleController
{
    public static function estadistica(Router $router)
    {
        if (isset($_SESSION['auth_user'])) {
            $router->render('productos/estadistica', []);
        } else {
            header('Location: /datatable/');
        }
    }

    public static function detalleVentasAPI()
    {

        $sql = "SELECT  producto_nombre as producto, sum (detalle_cantidad) as cantidad  from detalle_ventas inner join ventas on detalle_venta = venta_id inner join productos on detalle_producto = producto_id where detalle_situacion = 1  group by producto_nombre order by producto_nombre";

        try {

            $productos = Detalle::fetchArray($sql);

            echo json_encode($productos);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

    public static function estadistica2(Router $router)
    {
        if (isset($_SESSION['auth_user'])) {
            $router->render('clientes/estadistica2', []);
        } else {
            header('Location: /datatable/');
        }
    }


    public static function detalleClientesAPI()
    {

        $sql = "SELECT c.cliente_nombre, sum (dv.detalle_id) AS cantidad_productos
        FROM clientes c
        inner join ventas v ON c.cliente_id = v.venta_cliente
        inner join detalle_ventas dv ON v.venta_id = dv.detalle_venta
        GROUP BY c.cliente_nombre;";

        try {

            $clientes = Detalle::fetchArray($sql);

            echo json_encode($clientes);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

}