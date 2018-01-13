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
    function openmodal(){
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
                <div class="row form-group">
                    <label class=" col-xs-12 col-md-2 control-label">Documento</label>
                    <div class="col-xs-10 col-md-2">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-2 col-md-1">
                        <button type="button" class="btn btn-info btn-md center-block">
                            <span class="glyphicon glyphicon-search"></span> 
                        </button>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <input type="text" class="form-control" disabled="">
                    </div>
                </div>
                <!--fin fila 1-->
                <!--fila 2-->
                <div class="row form-group">
                    <label class=" col-xs-12 col-md-2 control-label">Numero</label>
                    <div class="col-xs-12 col-md-2">
                        <input type="text" class="form-control">
                    </div>
                    <label class=" col-xs-12 col-md-1 control-label">Fecha</label>
                    <div class="col-xs-12 col-md-2">
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-xs-12 col-md-2">
                        <select class="form-control">
                            <option>Tipo de Documento</option>   
                        </select>
                    </div>
                    <div class="col-xs-12 col-md-2">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <!--fin fila 2-->
                <!--fila 3-->
                <div class="row form-group">
                    <div class="col-xs-12 col-md-3 col-md-offset-1">
                        <button type="button" class="btn btn-info btn-md">
                            <span class="glyphicon glyphicon-search"></span> Buscar documento 
                        </button>
                    </div>
                    <label class=" col-xs-12 col-md-3 control-label">Nombre del Documento</label>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

</div>
<!--fin modal-->
</body>