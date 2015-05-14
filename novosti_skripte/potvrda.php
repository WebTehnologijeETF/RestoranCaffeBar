<?php
    $ime = htmlentities($_POST['ime']);
    $mail = htmlentities($_POST['mail']);
    $drzava = ($_POST['telefon'] == -1) ? "Niste unijeli telefon" : htmlentities($_POST['telefon']);
    $opcina = htmlentities($_POST['opcina']);
    $skola = htmlentities($_POST['skola']);
    $poruka = htmlentities($_POST['poruka']);
?>

<h2 class="podnaslov">Provjerite ispravnost Vaših unesenih podataka:</h2>

<div id="prikazL">
    <p>Ime:</p>
    <p>Mail:</p>
    <p>Država:</p>
    <p>Grad:</p>
    <p>Opæina:</p>
    <p>Srednja škola:</p>
    <p>Poruka:</p>
</div>
<div id="prikazD">
    <p><?=$ime?></p>
    <p><?=$mail?></p>
    <p><?=$telefon?></p>
    <p><?=($opcina == "") ? "Niste unijeli opcinu" : $opcina?></p>
    <p><?=($skola == "") ? "Niste unijeli srednju skolu" : $skola?></p>
    <p><?=$poruka?></p>
</div>
<div id=potvrda>
    <h3>Da li ste sigurni da želite poslati ove podatke?</h3>
    <form method="get" action="novosti_skripte/slanjeMaila.php?ime=<?=urlencode($ime)?>&mail=<?=urlencode($mail)?>&telefon=<?=urlencode($telefon)?>&opcina=<?=urlencode($opcina)?>&skola=<?=urlencode($skola)?>&poruka=<?=urlencode($poruka)?>">
        <input type="submit" value="Siguran sam">
    </form>
</div>