@extends('layout/plantilla')

@section("tituloPagina", "Contrataciones")

@section('contenido')
<div class="card">
    <h5 class="card-header">Contratacion</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('contrataciones.store')}}" method="POST">
                @csrf
                <label for="">Selecciona usuario</label>   
                <select name="id_cliente">
                @foreach ($usuario as $u)
                    <option required class="form-control" value="{{ $u->id }}">{{$u->id}}</option>
                @endforeach
                </select>
                <br>
                <label for="">Selecciona paquete</label>   
                <select name="id_paquete">
                @foreach ($contrataciones as $p)
                    <option required class="form-control" value="{{ $p->id }}">{{$p->id}}</option>
                @endforeach
                </select>
                <br>
                <label for="">Seleccione el tipo de evento</label>
                <br><select required name="Tipo_evento"><option>misa</option><option>boda</option><option>bautizo</option></select>
                <br><label for="">Seleccione la forma de pago</label>
                <br><select required name="Forma_de_pago"><option>tarjeta</option><option>paypal</option></select>

                <br><label for="">seleccione la fecha</label>
                <!--Aqui va la fecha -->
                <br>
                <div class="container">
                    <div class="row">
                        <div class='col-sm-6'>
                            <div class="form-group">
                                <div class='input-group date' id='fecha'>
                                <input name="Fecha" required type='text' class="form-control" />
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br><label for="">seleccione la Hora</label>
                <!--Aqui la hora -->
                <div class="container">
                    <div class="row">
                        <div class='col-sm-6'>
                            <div class="form-group">
                                <div class='input-group date' id='hora'>
                                    <input name="Hora" required type='text' class="form-control" />
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br><label for="">Ubicacion del evento</label>
                <input type="text" name="Lugar" class="form-control" required>
                <br>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Siguiente
                </button>
            </form>
        </p>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>  

<script type="text/javascript">
    $('#fecha').datetimepicker({
        format: 'YYYY-MM-DD'
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#hora').datetimepicker({
            format: 'HH:mm:ss'
        });
    });
</script>
@endsection


