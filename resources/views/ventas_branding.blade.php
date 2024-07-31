@extends('adminlte::page')

@section('title', 'Branding')

@section('content')
<div class="container">
<div class="row justify-content-center">

    <div class="col-md-6">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('Registro de venta de Branding') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
    <form action="registrar_branding" method="post">
    @csrf

    <div class="input-group mb-3">
                <label for="fecha_inicial">Cliente para la venta: </label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                </div>
                <select class="form-control" name="cliente">
                <option value="0" selected default>Seleccione el cliente para la venta</option>
                    @foreach($data as $d)
                        <option value="{{ $d->cli_id }}">{{ $d->cli_documento." - ".$d->cli_nombre }}</option>
                    @endforeach
                </select>
            </div>

                </div>
                </div>
        </div>
    </div>

</div>
</div>
@endsection
