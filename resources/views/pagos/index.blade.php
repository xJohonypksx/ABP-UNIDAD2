
@extends("layouts.app")

@section("content")
    <div class="container-fluid py-5 bg-dark" style="min-height: 100vh;">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <h1 class="text-center text-white fw-bold">Listado de Pagos</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="rounded shadow-lg bg-gradient-to-b from-gray-800 to-gray-900 p-4">
                    <table class="table table-hover text-white align-middle">
                        <thead class="bg-gradient-to-r from-purple-700 to-indigo-800 text-white">
                        <tr>
                            <th class="fw-bold text-uppercase text-center" style="letter-spacing: 1px;">ID Pago</th>
                            <th class="fw-bold text-uppercase text-center" style="letter-spacing: 1px;">ID Ticket</th>
                            <th class="fw-bold text-uppercase text-center" style="letter-spacing: 1px;">Descripción del Pago</th>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-800">
                        @foreach($pagos as $pago)
                            <tr class="border-bottom border-gray-700">
                                <td class="text-center text-primary fs-4">{{ $pago->id_pago }}</td>
                                <td class="text-center fs-5">{{ $pago->id_ticket }}</td>
                                <td class="text-center fs-5">{{ $pago->descripcion_pago }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
