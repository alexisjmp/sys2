

<label id="" hidden></label>
<div class="row form-group">

    <div class="col-md-12 col-sm-12 col-xs-12 row ">
        <label class=" col-md-3 col-sm-3 col-xs-10 control-label " for="rut">R.U.T :</label>

        <div class="col-md-6 col-sm-8  col-xs-12 row">
            <div class="col-md-8  col-sm-8 col-xs-7 row">
                <input type="text" id="txt_rut" class="form-control"   placeholder="9999999" pattern="\d{3,8}" required > 
            </div>
            <label class=" col-md-1  col-sm-1 col-xs-1 control-label " >-</label>
            <div class="col-md-3 col-xs-4 ">
                <input type="text-inline" id="txt_verificador" class="form-control" placeholder="9"    pattern="\d|kK{1}" required >  
            </div>   
        </div>


    </div>
</div>   
<div class="row form-group">

    <div class="col-md-12 col-sm-12 col-xs-12 row   ">
        <label class=" col-sm-3  col-md-3 col-xs-10 control-label " for="razon_social">Rázon social :</label>
        <div class="col-md-6  col-sm-8 col-xs-10 row">
            <input type="text-inline" id="txt_razon_social" class="form-control"   placeholder="" pattern="[A-Za-z]{0,15}" required >
        </div>

        <!--                    <div class="col-md-1  col-xs-12 row ">
                                <span  class="glyphicon glyphicon-asterisk small"></span>                        
                            </div>-->

    </div>
</div>
<div class="row form-group">
    <div class="col-md-12 col-sm-12 col-xs-12 row ">
        <label class=" col-md-3 col-sm-3 col-xs-10 control-label" for="giro">Giro :</label>
        <div class="col-md-6 col-sm-8 col-xs-10 row">
            <input type="text-inline" id="txt_giro" class="form-control"   placeholder="" pattern="[A-Za-z0-9]{0,15}" required >
        </div>
    </div>



    <!--                    <div class="col-md-4  col-xs-6  ">
                            <label class=" col-md-5 l-xs-12 control-label" for="dirrecion">Dirección :</label>
                            <div class="col-md-7 col-xs-12 row">
                                <input type="text-inline" id="txt_direccion" class="form-control"   placeholder="" pattern="[A-Za-z0-9._]{0,15}" required >
                            </div>
                        </div>
                        <div class="col-md-1  col-xs-12 row">
                            <span  class="glyphicon glyphicon-asterisk small"></span>                        
                        </div>
                        <div class="col-md-1  col-xs-12 row">
                        </div>-->
</div><!-- fin la segunda fila -->
<!--                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                        <label class=" col-md-4 col-xs-12 control-label" for="ciuda">Ciudad :</label>
                        <div class="col-md-9 col-xs-12 row">
                            <input type="text-inline" id="txt_ciudad" class="form-control"   placeholder="" pattern="[A-Za-z]{0,15}" required >
                        </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                            <span  class="glyphicon glyphicon-asterisk small"></span>                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6  ">
                        <label class=" col-md-5 col-xs-12 control-label" for="comuna">Comuna :</label>
                        <div class="col-md-7 col-xs-12 row">
                            <input type="text-inline" id="txt_comuna" class="form-control"   placeholder="" required >
                        </div>
                    </div>
                </div> fin la tercera fila -->
<div class="row form-group">



    <div class="col-md-12 col-sm-12 col-xs-12 row ">
        <label class=" col-md-3 col-sm-3 col-xs-12 control-label" for="fono">Telefono :</label>
        <div class="col-md-6 col-sm-8 col-xs-10 row">
            <input type="text-inline" id="txt_fono" class="form-control"  onKeyPress="return numeros(event)" pattern="[0-9]{0,8}" required >
        </div>
    </div>

</div><!-- fin la cuarta fila -->
<!--                <div class="row form-group">
                    
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6 ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="fax"> Fax :</label>
                                    <div class="col-md-7 col-xs-12 row">
                                        <input type="text-inline" id="txt_fax" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                </div> fin la quinta fila -->
<div class="row form-group">
    <div class="col-md-12  col-sm-12 col-xs-12 row ">
        <label class=" col-md-3 col-sm-3 col-xs-10 control-label" for="correo">Email :</label>
        <div class="col-md-6 col-sm-8 col-xs-10 row">
            <input type="text-inline" id="txt_email" class="form-control"   placeholder="" pattern="^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required >
        </div>
    </div>

</div><!-- fin la sexta fila -->
<!--               <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                                    <label class=" col-md-4 col-xs-12 control-label" for="ranking">ranking :</label>
                                    <div class="col-md-9 col-xs-12 row">
                                        <input type="text-inline" id="txt_ranking" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6 ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="servicio"> servicio :</label>
                                    <div class="col-md-7 col-xs-12 row">
                                        <input type="text-inline" id="txt_servicio" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                </div> fin la septima fila -->
<div class="row form-group">
    <div class="col-md-12  col-sm-12 col-xs-12 row ">
        <label class=" col-md-3 col-sm-3 col-sm-3 col-xs-12 control-label" for="nombref">Nombre de fantasia :</label>
        <div class="col-md-6 col-sm-8 col-sm-8 col-xs-10 row">
            <input type="text-inline" id="txt_nombref" class="form-control"   placeholder="" required >
        </div>
    </div>

</div><!-- fin la septima fila -->

<div class="row form-group">
    <div class="col-md-12  col-sm-12 col-md-offset-7  col-xs-12">
        <button type="button" title="Aceptar"  class="btn btn-info "onclick=" validacion();"> <span  class="glyphicon glyphicon-floppy-disk small"></span>  agregar</button>
        <button type="button" title=Limpiar"  class="btn btn-danger " onclick="limpiar()"> <span  class="glyphicon glyphicon-refresh small"></span>  limpiar</button>
    </div>
</div>
<div class="row">
    <div id="alert" class="col-md-8 col-xs-12">  </div>
</div> 









