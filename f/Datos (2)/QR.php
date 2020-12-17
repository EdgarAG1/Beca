<?php
 require 'phpqrcode/qrlib.php';
 $dir = 'temp/';
 if(!file_exists($dir))
     mkdir($dir);
     $filename=$dir.'test.png';
     $tamanio=15;
     $level= 'H';
     $frameSize=3;
     $contenido= 'Hola xd';

     QRcode::png($contenido,$filename,$level,$tamanio,$frameSize); 
?>