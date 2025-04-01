<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Venta;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Datos para tarjetas
        $ventasHoy = Venta::whereDate('created_at', today())->sum('total');
        $ventasAyer = Venta::whereDate('created_at', today()->subDay())->sum('total');
        $variacionVentas = $ventasAyer != 0 ? round(($ventasHoy - $ventasAyer) / $ventasAyer * 100, 2) : 100;

        return view('dashboard.index', [
            // Tarjetas
            'ventasHoy' => $ventasHoy,
            'variacionVentas' => $variacionVentas,
            'totalClientes' => Cliente::count(),
            'clientesNuevos' => Cliente::whereDate('created_at', today())->count(),
            'totalProductos' => Producto::count(),
            'stockBajo' => Producto::where('stock_p', '<', 10)->count(),
            'totalPedidos' => Venta::count(),
            'pedidosPendientes' => Venta::where('estado', 'pendiente')->count(),

            // Gráficos
            'ventasMensuales' => Venta::selectRaw('
                MONTH(created_at) as mes,
                SUM(total) as total
            ')
                ->whereYear('created_at', now()->year)
                ->groupBy('mes')
                ->orderBy('mes')
                ->get(),

            // Tablas
            'topProductos' => Producto::select('productos.*')
                ->join('ventas', 'productos.id_producto', '=', 'ventas.id_producto')
                ->selectRaw('SUM(ventas.cantidad) as unidades_vendidas')
                ->groupBy('productos.id_producto')
                ->orderByDesc('unidades_vendidas')
                ->limit(5)
                ->get(),

            'ultimasVentas' => Venta::with(['cliente.persona', 'detalles'])
                ->latest()
                ->paginate(5),

            'productosStockCritico' => Producto::where('stock_p', '<', 5)
                ->orderBy('stock_p')
                ->get()
        ]);
    }
}
