<?php

require('../clases/fpdf181/fpdf.php');
require("../clases/mailer/class.phpmailer.php");
//require_once('../clases/paciente.php');
//require("enviaremail.php");

require_once('../clases/cls_pdf.php');


$total_servicio =$_GET['total_servicio'];
$myJSON = json_decode($_GET['myJSON1']);

report($myJSON,$total_servicio,$email);



function report($myJSON,$total_servicio,$email) {
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
   // $pdf->Output();
    
    
    if($_GET['email']!=''  ){
        $email = $_GET['email'];
        $data =$pdf->Output('','S');
        sendemail($data, $email);
    }else 
        $email = '';
    
       
     
    //}   
}

function sendemail($data, $email){
  
$mail = new PHPMailer();
		$mail->Mailer = "smtp";
		$mail->SMTPAuth = true;
		$mail->Host = "mail.hoysalud.cl";
		$mail->Username = "contacto@hoysalud.cl";
		$mail->Password = "@contacto123";
		//$mail->From = "socomat@dominio.com";
		$mail->From = 'contacto@hoysalud.cl';
		$mail->FromName = 'prueba';
                $mail->AddAddress($email);
                $html = "";
$mail->MsgHTML($html);
$mail->IsHTML(true);
//$mail->AddAttachment($html, $name, $encoding, $type)
//$mail->AddStringAttachment($data, 'cotiza'.date('d-m-Y').'.pdf', 'base64', 'application/pdf');
$mail->AddStringAttachment($data, 'cotiza'.date('d-m-Y').'.pdf','base64', 'application/octet-stream');
	 //$mail->AddAttachment($mon);
	 if($mail->Send()){	
             echo "enviado";
         }else
             echo "NO enviado"; 
         unset($mail);     
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

}?>