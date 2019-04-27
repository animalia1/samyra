<?php






$header="MIME-Version: 1.0\r\n";
$header.='From:"Admin"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			<img src=""/>
			<br />
			Vous êtes conviés à effectuer la livraison de la <HR>facture
			
		</div>
	</body>
</html>
';

mail("ouedraogoamisamyra@gmail.com", "Salut ", $message, $header);

header('Location: ../promo_event.php');	

?>

