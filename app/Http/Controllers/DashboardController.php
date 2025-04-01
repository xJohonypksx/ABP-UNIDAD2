<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            // Datos para las tarjetas
            'totalVentas' => Venta::sum('subtotal'),
            'totalClientes' => Cliente::count(),
            'productosStockBajo' => Producto::where('stock_p', '<', 10)->get(),

            // Datos para gráficos
            'ventasMensuales' => Venta::selectRaw('
                MONTH(created_at) as mes,
                SUM(subtotal) as total
            ')->groupBy('mes')->get(),

            'topProductos' => Producto::withCount(['ventas as unidades_vendidas' => function($query) {
                $query->selectRaw('SUM(cantidad)');
            }])->orderByDesc('unidades_vendidas')->take(5)->get()
        ]);
    }
}
