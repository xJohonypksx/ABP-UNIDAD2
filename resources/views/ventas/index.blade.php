@extends("layouts.app")
@section("content")
    <div class="container-fluid py-5 bg-dark" style="min-height: 100vh;">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <h1 class="text-center text-white fw-bold">Listado de Ventas</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="rounded shadow-lg bg-gradient-to-b from-gray-800 to-gray-900 p-4">
                    <table class="table table-hover text-white align-middle">
                        <thead class="bg-gradient-to-r from-purple-700 to-indigo-800 text-white">
                        <tr>
                            <th class="fw-bold text-uppercase text-center" style="letter-spacing: 1px;">Número de Venta</th>
                            <th class="fw-bold text-uppercase text-center" style="letter-spacing: 1px;">Producto</th>
                            <th class="fw-bold text-uppercase text-center" style="letter-spacing: 1px;">Ticket</th>
                            <th class="fw-bold text-uppercase text-center" style="letter-spacing: 1px;">Cantidad</th>
                            <th class="fw-bold text-uppercase text-center" style="letter-spacing: 1px;">Subtotal</th>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-800">
                        @foreach($ventas as $index => $venta)
                            <tr class="border-bottom border-gray-700">
                                <td class="text-center text-primary fs-4">{{ $venta->id_venta }}</td>
                                <td class="text-center fs-5">{{ $venta->id_producto }}</td>
                                <td class="text-center fs-5">{{ $venta->id_ticket }}</td>
                                <td class="text-center fs-5">{{ $venta->cantidad }}</td>
                                <td class="text-center fs-5">{{ number_format($venta->subtotal, 2) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

