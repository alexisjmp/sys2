
<?PHP
require_once('../negocio/reglasdatos.php');
//require_once('../clases/paciente.php');
//require_once('../clases/clscomuna.php');
//require_once('../servicio/funciones_adicionales.php');

listarcategorias();

function listarcategorias() {

    $html = '';
    $categorias = msolistaservicios();

    for ($i = 0; $i < count($categorias); $i++) {
        $html = $html . "<option value=" . $categorias[$i]['id_categoria'] . ">" . strtolower($categorias[$i]['nombre_categoria']) . "</option>";
    }
    ?>
<select class="form-control" onchange=" showResult('',2,this.value,'') " name="" id="sel_service">  
        <option value='0'></option>
        <? echo $html; ?>
    </select> 
<? } ?>