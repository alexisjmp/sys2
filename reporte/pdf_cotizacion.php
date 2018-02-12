<?php

require('../clases/fpdf181/fpdf.php');

//require_once('../clases/paciente.php');


require_once('../clases/cls_pdf.php');

$total_servicio =$_GET['total_servicio'];
$myJSON = json_decode($_GET['myJSON1']);

report($myJSON,$total_servicio);



function report($myJSON,$total_servicio) {
// Instanciation of inherited class
    $pdf = new PDF('L', 'mm', 'Letter');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times', '', 5);
//$pdf->ChapterTitle(1,'HOLA');
// $fecha = '2017-11-20';


    $pdf->FECHATitle('', 'FECHA:' . date('d/m/Y H:i '));
    $pdf->Cell(0, 4, '', 0, 1);

    //$pdf->ChapterTitle2(' Reporte agenda - paciente: '.getnombrepaciente($id_paciente),' ');
// $fecha = cambiaf_a_mysql($_POST['fecha_atencion_in']);

    imprimirrpt($myJSON, $pdf,$total_servicio);
    $pdf->Output();
}

function imprimirrpt($arr, $pdf,$total_servicio) {
$pdf->FECHATitle('','Valor Servicio Total:'.$total_servicio );    
$w = array(60, 45, 60, 45,45);
        for ($i = 0; $i < count($arr); $i++) {
            // hora-tipo atencion, nombre-apellido-fecha nacimiento-estado civil -estado-fono-fono alternativo   

            $pdf->Cell($w[0], 6, $arr[$i][0], 1, 0, 'C');
            $pdf->Cell($w[1], 6, $arr[$i][1], 1, 0, 'C');
            $pdf->Cell($w[2], 6, $arr[$i][2], 1, 0, 'C');
            $pdf->Cell($w[3], 6, $arr[$i][3], 1, 0, 'C');
            $pdf->Cell($w[4], 6, $arr[$i][4], 1, 0, 'C');
            
            // $pdf->Cell($w[8],3,$arrAgendado[$i]['nombre_paciente'],1,0,'C');
            $pdf->Ln();

            //$arrAgendado[$i][3]."--".$arrAgendado[$i][4] ,1,1,'L');
        }

}

?>
