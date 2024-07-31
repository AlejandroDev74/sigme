@extends('adminlte::page')

@section('title', 'Principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
    <div class="card-body">

<div class="row">

    <div class="col-md-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $data2 }}</h3>
                <p>Ventas registradas</p>
            </div>
            <div class="icon">
                <i class="fas fa-fw fa-handshake"></i>
            </div>
            <a href="/ventas" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-md-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $data }}</h3>
                <p>Clientes registrados</p>
            </div>
            <div class="icon">
                <i class="fas fa-fw fa-id-card"></i>
            </div>
            <a href="/clientes" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-md-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $data1 }}</h3>
                <p>Usuarios registrados</p>
            </div>
            <div class="icon">
                <i class="fas fa-fw fa-users"></i>
            </div>
            <a href="/usuarios" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-md-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ 0 }} %</h3>
                <p>Porcentaje de venta</p>
            </div>
            <div class="icon">
                <i class="fas fa-fw fa-flag"></i>
            </div>
            <a href="/ventas" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    </div>
    <div class="row">

    <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('Oferta comercial') }}</div>

        <div class="card-body table-responsive p-0">
        <table class="table table-striped table-valign-middle">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Unidades vendidas</th>
                    <th>Ventas por producto</th>
                    <th>Más</th>
                </tr>
            </thead>

        <tbody>

        <tr>
            <td><i class="fa fa-camera-retro"></i>
                 Stands
            </td>
            <td>
                $13 USD
            </td>
            <td>
                10
            </td>
        <td>
            <small class="text-success mr-1">
                <i class="fas fa-arrow-up"> </i>
                12%
            </small>
            12,000 vendidos
        </td>
        <td>
        <a href="#" class="text-muted">
        <i class="fas fa-search"></i>
        </a>
        </td>
        </tr>
        <tr>

        <tr>
            <td><i class="fa fa-camera-retro"> </i>
                 Material POP
            </td>
            <td>
                $13 USD
            </td>
            <td>
                10
            </td>
        <td>
            <small class="text-success mr-1">
                <i class="fas fa-arrow-up"></i>
                12%
            </small>
            12,000 vendidos
        </td>
        <td>
        <a href="#" class="text-muted">
        <i class="fas fa-search"></i>
        </a>
        </td>
        </tr>
        <tr>

        <tr>
            <td><i class="fa fa-camera-retro"> </i>
                 Branding
            </td>
            <td>
                $13 USD
            </td>
            <td>
                10
            </td>
        <td>
            <small class="text-success mr-1">
                <i class="fas fa-arrow-up"></i>
                12%
            </small>
            12,000 vendidos
        </td>
        <td>
        <a href="#" class="text-muted">
        <i class="fas fa-search"></i>
        </a>
        </td>
        </tr>
        <tr>

        <tr>
            <td><i class="fa fa-camera-retro"> </i>
                 Paquetes
            </td>
            <td>
                $13 USD
            </td>
            <td>
                10
            </td>
        <td>
            <small class="text-success mr-1">
                <i class="fas fa-arrow-up"></i>
                12%
            </small>
            12,000 vendidos
        </td>
        <td>
        <a href="#" class="text-muted">
        <i class="fas fa-search"></i>
        </a>
        </td>
        </tr>
        <tr>

        <thead>
        <tr>
            <th colspan="3">
            <i class="fa fa-flag-checkered"> </i>
            Ventas totales</th>
            <th colspan="2">10000 vendidos</th>
        <tr>
        </thead>
        
        </tbody>
        </table>
        </div>
    </div>

</div>

    </div>   
    </div>
</div>
@endsection
