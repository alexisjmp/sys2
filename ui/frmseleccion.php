<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    function openmodal() {
        $("#MyModal").modal("show");
        $("#MyModal").on('shown.bs.modal', function () {
            //     $("#myModal").on('hide.bs.modal', function () {
            //     
            //   loadDoc();

        });
    }
</script>
<body onload="openmodal()">
    <button class="btn btn-info btn-lg" id="myBtn"  data-toggle="modal" data-target="#MyModal" data-backdrop="true">
        <span class="glyphicon glyphicon-search"></span>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="MyModal"  role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nombre personal</h4>
                </div>
                <div class="modal-body">
                    <!--                        fila 1-->
                    <!--fin fila 1-->
                    <!--fila 2-->
                    <div class="row form-group">
                        <label class=" col-xs-12 col-md-1 control-label">Categoria</label>
                        <div class="col-xs-12 col-md-3">
                            <select class="form-control">
                                <option>hola</option>
                                <option>MUNDO</option>
                            </select>
                        </div>
                        <label class=" col-xs-12 col-md-1 control-label">Nombre</label>
                        <div class="col-xs-12 col-md-3">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-xs-12 col-md-3 ">
                            <button type="button" class="btn btn-info btn-md">
                                <span class="glyphicon glyphicon-search"></span> Buscar servicio 
                            </button>
                        </div>
                    </div>
                    <!--fin fila 2-->
                    <div id="marcotablaservicios">
                        aqui el div
                    </div>
                    <!--fila 3-->
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!--fin modal-->
</body>