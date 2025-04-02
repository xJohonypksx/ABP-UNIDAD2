@extends("layouts.app")

@section("content")
    <div class="container-fluid py-5 bg-white" style="min-height: 100vh;">
        <h1 class="text-center fw-bold mb-4 text-primary">Dashboard de Administración</h1>

        <div class="row g-4">
            <!-- Tarjetas de métricas -->
            <div class="col-md-3">
                <div class="card shadow-lg border-0 p-3 bg-warning text-white">
                    <h6 class="text-light">Ventas Totales</h6>
                    <h2 class="fw-bold">${{ number_format($totalVentas, 2) }}</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg border-0 p-3 bg-success text-white">
                    <h6 class="text-light">Productos Totales</h6>
                    <h2 class="fw-bold">{{ $totalProductos }}</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg border-0 p-3 bg-info text-white">
                    <h6 class="text-light">Inventario Total</h6>
                    <h2 class="fw-bold">{{ $totalInventarios }}</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg border-0 p-3 bg-danger text-white">
                    <h6 class="text-light">Pagos Totales</h6>
                    <h2 class="fw-bold">${{ number_format($totalPagos, 2) }}</h2>
                </div>
            </div>
        </div>

        <!-- Tabla de Ventas -->
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card p-4 shadow-lg border-0">
                    <h5 class="fw-bold text-center text-dark">Ventas Recientes</h5>
                    <table class="table table-hover text-center">
                        <thead class="table-dark">
                        <tr>
                            <th>ID Venta</th>
                            <th>Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ventas as $venta)
                            <tr>
                                <td>{{ $venta->id_venta }}</td>
                                <td class="text-success fw-bold">${{ number_format($venta->subtotal, 2) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection






