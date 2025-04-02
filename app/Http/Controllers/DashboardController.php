<?php

namespace App\Http\Controllers;

use App\Models\inventarios;
use App\Models\pagos;
use App\Models\Personas;
use App\Models\Inventario;
use App\Models\Pago;
use App\Models\persona;
use App\Models\Producto;
use App\Models\productos;
use App\Models\Proveedor;
use App\Models\proveedores;
use App\Models\Ticket;
use App\Models\tickets;
use App\Models\Vendedor;
use App\Models\vendedores;
use App\Models\Venta;
use App\Models\ventas;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtener datos para las tablas
        $personas = personas::all();
        $inventarios = inventarios::all();
        $pagos = pagos::all();
        $productos = productos::all();
        $proveedores = proveedores::all();
        $tickets = tickets::all();
        $vendedores = vendedores::all();
        $ventas = ventas::all();

        // Calcular algunos porcentajes y totales
        $totalVentas = $ventas->sum('subtotal');
        $totalProductos = $productos->count();
        $totalInventarios = $inventarios->sum('cantidad_dis');
        $totalPagos = $pagos->count();





        // Porcentaje de ventas por tipo de pago
        $pagoCredito = $pagos->where('descripcion_pago', 'Pago con tarjeta de crédito')->count();
        $pagoEfectivo = $pagos->where('descripcion_pago', 'Pago en efectivo')->count();
        $totalPagos = $pagoCredito + $pagoEfectivo;

        return view('dashboard.index', compact('personas', 'inventarios', 'pagos', 'productos', 'proveedores', 'tickets', 'vendedores', 'ventas', 'totalVentas', 'totalProductos', 'totalInventarios', 'totalPagos', 'pagoCredito', 'pagoEfectivo'));
    }
}

