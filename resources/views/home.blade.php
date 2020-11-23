@extends('layouts.app')

@section('content')

<div class="modal fade bd-example-modal-xl" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Actualizar seguimiento de libro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <label for="inputCity">Nombre titulo</label>
                                    <input type="text" class="form-control" id="nameEdit">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputZip">Total</label>
                                    <input type="text" class="form-control" id="totalEdit">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Verificación imprenta</label>
                                    <input type="date" class="form-control" id="printer_verification">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Entrega bodega</label>
                                    <input type="date" class="form-control" id="warehouse_delivery">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Total devoluciones</label>
                                    <input type="text" class="form-control" id="total_returns">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Cantidad libros OK</label>
                                    <input type="text" class="form-control" id="books_quantity_ok">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputCity">Ingreso subsanados</label>
                                    <input type="text" class="form-control" id="income_corrected">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputCity">Devolución subsanados</label>
                                    <input type="text" class="form-control" id="return_corrected">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputCity">Devolución reintegro</label>
                                    <input type="text" class="form-control" id="refund_refund">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Pegue stikers y tejuelos</label>
                                    <input type="text" class="form-control" id="glue_stikers_weave">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Forrado</label>
                                    <input type="text" class="form-control" id="Lined">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Pegue bolsillo y cod barras</label>
                                    <input type="text" class="form-control" id="stick_pocket_barcode">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Aislamiento</label>
                                    <input type="text" class="form-control" id="isolation">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputCity">Entrega distribuidor</label>
                                    <input type="text" class="form-control" id="distributor_delivery">
                                </div>
                                <div class="alert alert-success col-md-5" role="alert" id="receivedSatisfaction">
                                    Recibido a satisfacción: 19-11-2020
                                </div>
                                <div class="alert alert-warning col-md-5 offset-1 ml-auto" role="alert" id="dateUpdated">
                                    fecha ultima actualización: -
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="editBook">Guardar</button>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade bd-example-modal" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Registro libro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Nombre titulo</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputZip">Total</label>
                                <input type="text" class="form-control" id="total">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="store">Guardar</button>
            </div>
        </div>
    </div>
</div>
<div class="container" style="max-width: 1854px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">SEGUIMIENTO A PROCESOS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success mb-2" id="register">Registrar</button>
                            <table id="example2" class="table table-striped table-bordered dt-responsive"
                                   style="width:100%">
                                <thead>
                                <tr>
                                    <th>Nombre titulo</th>
                                    <th>Total</th>
                                    <th>Verificación imprenta</th>
                                    <th>Entrega bodega</th>
                                    <th>Total devoluciones</th>
                                    <th>Cantidad libros OK</th>
                                    <th>Ingreso subsanados</th>
                                    <th>Devolucion subsanados</th>
                                    <th>Devolucion reintegro</th>
                                    <th class="none">Pegue stikers y tejuelos</th>
                                    <th class="none">Forrado</th>
                                    <th class="none">Pegue bolsillo y cod barras</th>
                                    <th class="none">Aislamiento</th>
                                    <th class="none">Entrega distribuidor</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            var book_id = ''
            var table = $('#example2').DataTable({

                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excel',
                        text: 'Exportar a excel',
                        filename: function(){
                            return `Listado seguimiento a procesos`

                        },
                        title:function(){
                            return 'Listado seguimiento a procesos'
                        },
                        exportOptions: {
                            columns: [ 0, 1, 2, 3,4,5,6,7,8,9,10,11,12,13 ]
                        }

                    }
                ],
                'ajax': "{{ route('libros_dt')}}",
                'columns': [
                    {data: 'name', className: 'text-center'},
                    //{data: 'total', "width": "20%"},
                    {data: 'total', className: 'text-center'},
                    {data: 'printer_verification', className: 'text-center'},
                    {data: 'warehouse_delivery', className: 'text-center'},
                    {data: 'total_returns', className: 'text-center'},
                    {data: 'books_quantity_ok', className: 'text-center'},
                    {data: 'income_corrected', className: 'text-center'},
                    {data: 'return_corrected', className: 'text-center'},
                    {data: 'refund_refund', className: 'text-center'},

                    {data: 'glue_stikers_weave', className: 'text-center'},
                    {data: 'Lined', className: 'text-center'},
                    {data: 'stick_pocket_barcode', className: 'text-center'},
                    {data: 'isolation', className: 'text-center'},
                    {data: 'distributor_delivery', className: 'text-center'},
                    {data: 'action', className: 'text-center'},
                ]
            });
            $('#register').on('click',function () {
                $('#exampleModalCenter1').modal('show')
            })
            $('#edit').on('click',function () {
                $('#exampleModalCenter2').modal('show')
            })

            $('#store').on('click',function () {
                var route = '{{ route('store') }}';
                var typeAjax = 'POST';
                var async = async || false;
                var formDatas = new FormData();
                formDatas.append('name',$('#name').val() );
                formDatas.append('total',$('#total').val() );
                $.ajax({
                    url: route,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    cache: false,
                    type: typeAjax,
                    contentType: false,
                    data: formDatas,
                    processData: false,
                    async: async,
                    beforeSend: function () {

                    },
                    success: function (response, xhr, request) {
                        console.log(response)
                        table.ajax.reload()
                        $('#exampleModalCenter1').modal('hide')
                        swal({
                            title: "Libro!",
                            text: "Libro registrado",
                            icon: "success",
                            button: "Ok",
                        });
                    },
                    error: function (response, xhr, request) {

                    }
                });
            })

            table.on('click', '.edit', function (e) {
                $tr = $(this).closest('tr');
                let dataTable = table.row($tr).data();
                console.log(dataTable)
                book_id = dataTable.id

                $('#nameEdit').val(dataTable.name)
                $('#totalEdit').val(dataTable.total)
                $('#printer_verification').val(dataTable.printer_verification)
                $('#warehouse_delivery').val(dataTable.warehouse_delivery)
                $('#total_returns').val(dataTable.total_returns)
                $('#books_quantity_ok').val(dataTable.books_quantity_ok)
                $('#income_corrected').val(dataTable.income_corrected)
                $('#return_corrected').val(dataTable.return_corrected)
                $('#refund_refund').val(dataTable.refund_refund)

                $('#glue_stikers_weave').val(dataTable.glue_stikers_weave)
                $('#Lined').val(dataTable.Lined)
                $('#stick_pocket_barcode').val(dataTable.stick_pocket_barcode)
                $('#isolation').val(dataTable.isolation)
                $('#distributor_delivery').val(dataTable.distributor_delivery)

                $('#receivedSatisfaction').html(`Fecha de recibido a satisfacción: -`)
                $('#dateUpdated').html(`Fecha de última actualización: -`)
                if(dataTable.books_quantity_ok == dataTable.total && dataTable.total != null){
                    console.log(222)
                    $('#receivedSatisfaction').removeClass('alert-warning')
                    $('#receivedSatisfaction').addClass('alert-success')
                    $('#receivedSatisfaction').html(`Fecha de recibido a satisfacción: ${dataTable.updated_at}`)
                }else{
                    console.log(111)
                    $('#receivedSatisfaction').removeClass('alert-success')
                    $('#receivedSatisfaction').addClass('alert-warning')
                    $('#receivedSatisfaction').html(`Fecha de recibido a satisfacción: -`)
                }
                $('#dateUpdated').html(`Fecha de última actualización: ${dataTable.updated_at}`)
                $('#exampleModalCenter2').modal('show')
            });

            $('#editBook').on('click',function(){

                var route = '{{ route('update') }}';
                var typeAjax = 'POST';
                var async = async || false;
                var formDatas = new FormData();
                formDatas.append('id',book_id );
                formDatas.append('printer_verification',$('#printer_verification').val() );
                formDatas.append('warehouse_delivery',$('#warehouse_delivery').val() );
                formDatas.append('total_returns',$('#total_returns').val() );
                formDatas.append('books_quantity_ok',$('#books_quantity_ok').val() )
                formDatas.append('income_corrected',$('#income_corrected').val() )
                formDatas.append('return_corrected',$('#return_corrected').val() )
                formDatas.append('refund_refund',$('#refund_refund').val() )

                formDatas.append('glue_stikers_weave',$('#glue_stikers_weave').val() )
                formDatas.append('Lined',$('#Lined').val() )
                formDatas.append('stick_pocket_barcode',$('#stick_pocket_barcode').val() )
                formDatas.append('isolation',$('#isolation').val() )
                formDatas.append('distributor_delivery',$('#distributor_delivery').val() )


                $.ajax({
                    url: route,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    cache: false,
                    type: typeAjax,
                    contentType: false,
                    data: formDatas,
                    processData: false,
                    async: async,
                    beforeSend: function () {

                    },
                    success: function (response, xhr, request) {
                        console.log(response)
                        table.ajax.reload()
                        $('#exampleModalCenter2').modal('hide')
                        swal({
                            title: "Libro!",
                            text: "Seguimiento actualizado",
                            icon: "success",
                            button: "Ok",
                        });
                    },
                    error: function (response, xhr, request) {

                    }
                });
            })

        } );
    </script>
@endsection
