<?php

require_once 'dompdf\dompdf\autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$name = $_GET['co'];
$dompdf = new Dompdf(['chroot' => __DIR__]);

$str = "<!DOCTYPE html>
<html>
<head>
<style>
body, html {
	margin: 0;
	padding-left: 13%;
	padding-top:5%;
}

body{

	color: black;
	display: table;
	font-family: Georgia, serif;
	font-size: 24px;
	text-align: center;
}</style>
	<title>Certificate</title>
</head>
<body>
<div >


     <div style='border: 20px solid tan;   width: 750px;height: 563px; vertical-align: middle;'>
         <div style='color: tan;padding-top:15%; ' >
             Blood Doner Organization
         </div>

         <div style='color: tan;
		 font-size: 48px;
		 margin: 20px;'>
             Certificate of Completion
         </div>

         <div style='margin: 20px;'>
             This certificate is presented to
         </div>

         <div style='border-bottom: 2px solid black; font-size: 32px;
		 font-style: italic;
		 margin: 20px auto;
		 width: 400px;'>
         $name
         </div>

         <div style=' margin: 20px;' >
             For Donating Blood to 
             
          
             Blood Bank <br/>
            
         </div>
     </div>

 
     </div>'
</body>
</html>
";


$dompdf->loadHtml($str);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();
?>
