<!DOCTYPE html>
<html>
<head>
	<title>Status slanja maila</title>
	<meta charset="UTF-8">
</head>
<body>
    <?php
        $to = "adrakovac1@etf.unsa.ba";
        $naslov = "Kontakt forma restrana Aurora";
        $poruka = "Autor: ".htmlentities($_GET['ime'])."\r\n"."Datum slanja: ".date("dd.mm.YYYY")."\r\n"."Telefon: ".htmlentities($_GET['telefon'])."\r\n"."\r\n".htmlentities($_GET['poruka']);
        $dodatno = "Reply-To: " . htmlentities($_GET['mail']);
        $poslanMail = mail($to, $naslov, $poruka, $dodatno);

        echo ($poslano == 1) ? "<h2>Zahvaljujemo se što ste nas kontaktirali.</h2>" : "<h2>Doslo je do greske pri slanju maila.</h2>";
        echo "<a href='../index.php'>Nazad na pocetnu</a>";
    ?>
</body>
</html>