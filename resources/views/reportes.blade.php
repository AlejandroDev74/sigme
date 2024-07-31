@extends('adminlte::page')

@section('title', 'Reportes')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
    <div class="col-md-6">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3">{{ __('Generación de Reportes') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
    <form action="generar_reporte" method="post">
    @csrf
    
        <div class="input-group mb-3">
            <label for="fecha_inicial">Reporte a generar: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
            </div>
            <select class="form-control" name="reporte">
                <option value="0" selected default>Seleccione el reporte a generar</option>
                <option value="1">Reporte de Ventas</option>
                <option value="2">Reporte de Tesorería</option>
                <option value="3">Reporte de Logística</option>
            </select>
        </div>
        </div>

        <div class="input-group mb-3">
            <label for="fecha_inicial">Fecha inicial: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-clock"></i></span>
            </div>
            <input type="date" class="form-control" name="fecha_inicial" id="fecha_inicial" required>
        </div>
        </div>

        <div class="input-group mb-3">
            <label for="fecha_final">Fecha final: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-clock"></i></span>
            </div>
            <input type="date" class="form-control" name="fecha_final" id="fecha_final" required>
        </div>
        </div>

        <div class="card-footer">
    <button type="submit" class="btn btn-primary float-right">
        <span class="fas fa-plus"></span> Generar</button>
    </div>

    </form>

    </div>
    </div>
    </div>
    </div>

    </div>
</div>
@endsection
