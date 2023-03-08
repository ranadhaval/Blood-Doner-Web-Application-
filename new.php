<?php

require_once 'dompdf\dompdf\autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$name = $_GET['co'];
$dompdf = new Dompdf(['chroot' => __DIR__]);
$str = "<!DOCTYPE html>
<html>
<head>
<style> body{

	padding-top:5%;
	color: black;
	
	font-family: Georgia, serif;
	font-size: 24px;
	text-align: center;
}</style>
	<title>Certificate</title>
</head>
<body>
	<h1 >Certificate</h1>
	<p>This certificate is presented to:</p>
	<h2>$name</h2>
	<p>For successfully completing :</p>
	<h3>Blood Donation</h3>
	<p>Date of completion:</p>
	
	<p>Authorized by:</p>
	<h4>Blood Bank Organization</h4>
</body>
</html>
";


$dompdf->loadHtml($str);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();
?>