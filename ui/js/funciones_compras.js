function guardarcompra() {
    //txtexamen1 -11
    exam = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    txtexam = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    var servicios = new Array();
    i = 0;
    id_evaluacion = $("#lblid_evaluacion").text();
    rut_especialista = $("#rut_usuario").val();
    if ($('#btabla').children().length != 0) {

        $("#btabla tr").each(function () {

            id_servicio = $(this).children("td:nth-child(5)").text();
            nombre = $(this).children("td:nth-child(6)").text();
            categoria = $(this).children("td:nth-child(7)").text();
            cantidad = $(this).children("td:nth-child(4)").children("input:text").val();
            valor = $(this).children("td:nth-child(8)").children("input:text").val();
            servicios[i] = new Array(id_servicio, nombre, categoria, cantidad, valor);
            i++;
        });
//     	if($("#txtexamen1").val().length > 0 ){
//     	exam[0]= 1;  txtexam[0]= $("#txtexamen1").val();
//     	}
//     	if($("#txtexamen2").val().length > 0 ){   
//     	exam[1]= 1;   txtexam[1]= $("#txtexamen2").val();
//     	}
//     	if($("#txtexamen3").val().length > 0 ){   
//     	exam[2]= 1;txtexam[2]= $("#txtexamen3").val();
//     	}
//     	if($("#txtexamen4").val().length > 0 ){   
//     	exam[3]= 1;txtexam[3]= $("#txtexamen4").val();
//     	}
//     	if($("#txtexamen5").val().length > 0 ){   
//     	exam[4]= 1;txtexam[4]= $("#txtexamen5").val();
//     	}
//     	if($("#txtexamen6").val().length > 0 ){   
//     	exam[5]= 1;txtexam[5]= $("#txtexamen6").val();
//     	}
//     	if($("#txtexamen7").val().length > 0 ){   
//     	exam[6]= 1;txtexam[6]= $("#txtexamen7").val();
//     	}
//     	if($("#txtexamen8").val().length > 0 ){   
//     	exam[7]= 1;txtexam[7]= $("#txtexamen8").val();
//     	}
//     	if($("#txtexamen9").val().length > 0 ){   
//     	exam[8]= 1;txtexam[8]= $("#txtexamen9").val();
//     	}
//     	if($("#txtexamen10").val().length > 0 ){   
//     	exam[9]= 1;txtexam[9]= $("#txtexamen10").val();
//     	}
//     	if($("#txtexamen11").val().length > 0 ){   
//     	exam[10]= 1;txtexam[10]= $("#txtexamen11").val();
//     	}
// 	 
        var myJSON1 = JSON.stringify(servicios);
        console.log(myJSON1);
//    	var  myJSON2 = JSON.stringify(txtexam);
        ruta = "../negocio/reglasdatos.php";
        marco = "";
        data = 'funcion=miipedido&myJSON1=' + myJSON1;
        sendajax(marco, ruta, data);
        //alert("hola");
    } else
        alert("Seleccionar una servicio");

    // else
    //  alert("Seleccionar un atencion");
}
//
//function buscar(op)
//{
//    opc = op;
//    nombre = '';
//    categoria = '';
//    codigo = '';
//    if (opc == 1)
//    {
//        nombre = $('#nombre_service').val();
//    } else if (opc == 2)
//    {
//        categoria = $('#sel_service').val();
//    } else
//    {
//        codigo = $('#cod_service').val();
//    }
//
//    ruta = "../negocio/reglasdatos.php";
//    marco = "";
//    data = 'funcion=buscaservicios&nombre_servicio=' + nombre+'&categoria_servicio='+categoria+'&codigo_servicio='+codigo;
//    sendajax(marco, ruta, data);
//}

 function showResult(str,op,cat,cod) {
      	
   	data ='?funcion=listaservicios&nombre='+str +'&opc='+op+'&cat='+parseInt(cat)+'&cod='+parseInt(cod);
//  if (str.length==0) {
//	document.getElementById("marco_productos").innerHTML="";
//	document.getElementById("marco_productos").style.border="0px";
//	return;
//  }
  if (window.XMLHttpRequest) {
	// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
	if (this.readyState==4 && this.status==200) {
  	document.getElementById("marco_productos").innerHTML=this.responseText;
  	document.getElementById("marco_productos").style.border="1px solid #A5ACB2";
	}
  }
  xmlhttp.open("GET","../funciones/listservicios_1.php"+data,true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 	xmlhttp.send();
}
