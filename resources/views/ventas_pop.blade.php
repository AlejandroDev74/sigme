@extends('adminlte::page')

@section('title', 'Material POP')

@section('content')
<div class="container">
<div class="row justify-content-center">

    <div class="col-md-6">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('Registro de venta de Material POP') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

  <form action="registrar_venta_pop" method="post">
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

        <div class="input-group mb-3">
                <label for="fecha_inicial">Material POP para la venta: </label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                </div>
                <select class="form-control" name="cliente">
                    <option value="0" selected default>Seleccione el Material POP para la venta</option>
                    @foreach($data2 as $d2)
                        <option value="{{ $d2->probra_id  }}">{{ $d2->probra_id ." - ".$d2->probra_nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary float-right">
        <span class="fas fa-check"></span> Iniciar proceso</button>
    </div>

</form>
</div>
</div>

<div class="col-md-12">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3">{{ __('Listado de Material POP en proceso') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        @csrf

        <table class="table table-striped table-hover" id="material" style='text-align: center; vertical-align: middle;'>
            <thead align="center">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Cliente</th>
                <th scope="col">Oferta</th>
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Valor</th>
                </tr>
            </thead>
           
            <tbody>
            @foreach($data3 as $d3)
                <tr>
                    <td>{{ $d3->venta_id }}</td>
                    <td>{{ $d3->venta_cliente }}</td>
                    <td>{{ $d3->venta_oferta }}</td>
                    <td>{{ $d3->venta_producto }}</td>
                    <td>{{ $d3->venta_catntidad }}</td>
                    <td>{{ $d3->venta_valor }}</td>
                </tr>
            @endforeach
             </tbody>
        </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

    <script>

        $('#material').DataTable({
            responsive: true,
            autoWidth: false,

        "language": {   
            "lengthMenu": "Mostrar _MENU_ registros de página",
            "zeroRecords": "No se han encontrado registros",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No se han encontrado registros",
            "infoFiltered": "(Filtrando de _MAX_ total de registros)",
            "search": "Busqueda: ",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
        });

        $(document).on("click", "#visualizar", function() {
            var id0 = $(this).data('id0');
            var documento0 = $(this).data('documento0');
            var nombre0 = $(this).data('nombre0');
            var correo0 = $(this).data('correo0');
            var telefono0 = $(this).data('telefono0');

            $("#id0").val(id0);
            $("#documento0").val(documento0);
            $("#nombre0").val(nombre0);
            $("#correo0").val(correo0);
            $("#telefono0").val(telefono0);
        });

        $(document).on("click", "#editar", function() {
            var id = $(this).data('id');
            var documento = $(this).data('documento');
            var nombre = $(this).data('nombre');
            var correo = $(this).data('correo');
            var telefono = $(this).data('telefono');

            $("#id").val(id);
            $("#documento").val(documento);
            $("#nombre").val(nombre);
            $("#correo").val(correo);
            $("#telefono").val(telefono);
        });

        $(document).on("click", "#habilitar", function() {
            var id2 = $(this).data('id2');
            var nombre2 = $(this).data('nombre2');
            var estado2 = $(this).data('estado2');

            $("#id2").val(id2);
            $("#nombre2").val(nombre2);
            $("#estado2").val(estado2);
        });

        $(document).on("click", "#inhabilitar", function() {
            var id3 = $(this).data('id3');
            var nombre3 = $(this).data('nombre3');
            var estado3 = $(this).data('estado3');

            $("#id3").val(id3);
            $("#nombre3").val(nombre3);
            $("#estado3").val(estado3);
        });

    </script>
@endsection