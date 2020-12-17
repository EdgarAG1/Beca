<?php
require_once 'tfpdf/tfpdf.php';
$mysqli = new mysqli('localhost','id15552161_root','Morat_2203_oo','id15552161_pruebas');

if($mysqli){
	echo "Tu Regristo fue dado de alta \u{2705}";
}
    $Nombre = trim($_POST['nom']);
	$A_Paterno = trim($_POST['apa']);
	$A_Materno = trim($_POST['ama']);
	$Fecha_nacimiento = trim($_POST['nac']);
    $Fecha=date("d-m-Y");
    $Edad = floor((time() - strtotime($Fecha_nacimiento)) / 31556926);
	$Domicilio = trim($_POST['dom']);
    $Email = trim($_POST['email']);
	$T_Celular = trim($_POST['tcel']);
	$T_Casa = trim($_POST['tcas']);
    $pais = trim($_POST['pais']);
if($pais==1){
$pais = "Prescolar";
}else if($pais==2){
$pais = "Primaria";
}else if($pais==3){
$pais= "Secundaria";
}else if($pais==4){
$pais= "Bachillerato";
}else if($pais==5){
$pais = "Licenciatura";
}else if($pais==6){
$pais = "Maestria";
}else if($pais==7){
$pais = "PostGrado";
}else if($pais==8){
$pais = "Idiomas";
} else if($pais==9){
$pais = "Otros Cursos";
}
    $tipoBeca = trim($_POST['tipoBeca']);
	$consulta = "INSERT INTO usuarios_pass2(Nombre,A_Paterno,A_Materno,Fecha_nacimiento,Fecha_sol,Edad,Domicilio,Email,T_Celular,T_Casa,Estudios,Op_Estudi) VALUES ('$Nombre','$A_Paterno','$A_Materno','$Fecha_nacimiento','$Fecha','$Edad','$Domicilio','$Email','$T_Celular','$T_Casa','$pais','$tipoBeca')";
	
    $mysqli->query($consulta);

        $pdf=new tFPDF();
        $title=$A_Paterno.$Nombre;
        //Primera página
        $pdf->AddPage();
        $pdf->Image('coa.jpg','0','0','210','297','JPG'); 

        $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
        $pdf->SetFont('DejaVu','',11);

        $pdf->SetFont('Arial', '', 15);
        $pdf->setTextColor(0, 0, 0);
        $pdf->SetXY(48.5, 128.13);
        $pdf->Cell(0, 0, $Nombre . $A_Paterno . $A_Materno);
        $pdf->SetXY(-50, 128.13);
        $pdf->Cell(0, 0, $Edad);
        $pdf->SetXY(56, -155);
        $pdf->Cell(0, 0, $Email);

        $pdf->SetXY(56, 156);
        $pdf->Cell(0, 0, $Domicilio);
        $pdf->SetXY(70, 199);
        $pdf->Cell(0, 0, $T_Celular);
        $pdf->SetXY(155, 199);
        $pdf->Cell(0, 0, $T_Casa);
        $pdf->SetXY(80, -85);
        $pdf->Cell(0, 0, $pais);

        $pdf->SetXY(75, -62.5);
        $pdf->Cell(0, 0, $tipoBeca);
        $pdf->Output('ojo/' . $title.'.pdf', 'F');
        //Envio de correo
        $to = $Email; 
        $nombre = $Nombre;
        $mensaje = "Tu Pre-Regristo se envió con éxito.Encuentra los detalles de tu solicitud en la Constancia adjunta que te hemos enviado.";
        
        $from = 'liquidacionespredial@coacalco.gob.mx'; 
        $fromName = 'Liquidaciones Predial';
        $subject = 'Beca Felipe Berriozábal';  
        
        //Selecciona el archivo PDF que se enviara
        $file = "ojo/".$title.'.pdf'; 
        
        include 'content.php';
        
        $headers = "De: $fromName"." <".$from.">"; 
         
        $semi_rand = md5(time());  
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
        
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
         
        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n"."Content-Transfer-Encodig:7bit\n\n".$htmlContent."\n\n";
        
        //Preparando arvhivo
        if(!empty($file) > 0){ 
            if(is_file($file)){ 
                $message .= "--{$mime_boundary}\n"; 
                $fp =    @fopen($file,"rb"); 
                $data =  @fread($fp,filesize($file)); 
        
                @fclose($fp); 
                $data = chunk_split(base64_encode($data)); 
                $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
                "Content-Description: ".basename($file)."\n" . 
                "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
            } 
        } 
        $message .= "--{$mime_boundary}--"; 
        $returnpath = "-f" . $from; 
        
        //Envvio de email
        $mail = @mail($to, $subject, $message, $headers, $returnpath); 
?>