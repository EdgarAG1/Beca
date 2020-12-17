<?php
    require_once 'tfpdf/tfpdf.php';
    $mysqli = new mysqli("localhost","id15552161_root","Morat_2203_oo","id15552161_pruebas");
    $id=$_GET["id"];
    $sql="SELECT * from usuarios_pass2 where ID='$id'";
    $result=$mysqli->query($sql);
if($mysqli){
    echo "Se ha enviado la respuesta \u{2705}";
}
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        $Nombre=$row["Nombre"];
        $A_Paterno=$row["A_Paterno"];
        $A_Materno=$row["A_Materno"];
        $Edad=$row["Edad"];
        $Domicilio=$row["Domicilio"];
        $Email=$row["Email"];
        $T_Celular=$row["T_Celular"];
        $T_Casa=$row["T_Casa"];
        $pais=$row["Estudios"];
        $tipoBeca=$row["Op_Estudi"];
    }
}else{
    echo "0 resultados";
}
    $pdf=new tFPDF();
        $title=$A_Paterno.$Nombre;
        //Primera página
        $pdf->AddPage();
        $pdf->Image('coa.jpg','0','0','210','297','JPG'); 
        $pdf->Image('test.png','55','55','15','15','PNG');

        $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
        $pdf->SetFont('DejaVu','',11);

        $pdf->SetFont('Arial', '', 15);
        $pdf->setTextColor(0, 0, 0);
        $pdf->SetXY(48.5, 128.13);
        $pdf->Cell(0, 0, "$Nombre $A_Paterno $A_Materno");
        $pdf->SetXY(-57, 128.13);
        $pdf->Cell(0, 0, $Edad);
        $pdf->SetXY(40, -155);
        $pdf->Cell(0, 0, $Email);

        $pdf->SetXY(50, 156);
        $pdf->Cell(0, 0, $Domicilio);
        $pdf->SetXY(70, 199);
        $pdf->Cell(0, 0, $T_Celular);
        $pdf->SetXY(152, 199);
        $pdf->Cell(0, 0, $T_Casa);
        $pdf->SetXY(70, -85);
        $pdf->Cell(0, 0, $pais);

        $pdf->SetXY(75, -62.5);
        $pdf->Cell(0, 0, $tipoBeca);
        $pdf->Output('bien/' . $title.'.pdf', 'F');
        //Envio de correo
        $to = $Email; 
        $nombre = $Nombre;
        $mensaje = "Se ha aceptado tu solicitud para la beca :)";
        
        $from = 'liquidacionespredial@coacalco.gob.mx'; 
        $fromName = 'Liquidaciones Predial';
        $subject = 'Beca Felipe Berriozábal';  
        
        //Selecciona el archivo PDF que se enviara
        $file = "bien/".$title.'.pdf'; 
        
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