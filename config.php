<?
$dbhost="localhost";
$dbuser="solupart_spdb";
$dbpass="spdb_01";

$db="solupart_spdb";

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//direcci�n del remitente 
$headers .= "From: <ventas@soluparts.com>\r\n"; 

//direcci�n de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: ventas@soluparts.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n" 

//direcciones que recibi�n copia 
//$headers .= "Cc: ventas@tuisla.com\r\n"; 

//direcciones que recibir�n copia oculta 
//$headers .= "Bcc: nelson@tuisla.com,ventas@tuisla.com\r\n"; 
$headers2 = "MIME-Version: 1.0\r\n"; 
$headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//direcci�n del remitente 
$headers2 .= "From: <ventas@soluparts.com>\r\n"; 

//direcci�n de respuesta, si queremos que sea distinta que la del remitente 
$headers2 .= "Reply-To: ventas@soluparts.com\r\n"; 
//*************************************************************************************************************************
?>