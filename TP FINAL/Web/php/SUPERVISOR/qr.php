<?php
	$size = 10;
	include ('../../phpqrcode/qrlib.php');
	
	QRcode::png('PHP QR Code',$size);
	
?>