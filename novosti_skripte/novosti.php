<?php

    $fajlovi = scandir("novosti_skripte/txt_fajlovi");
    $sortNovost = array();
    $sortDates = array();

    for ($i = 2; $i < count($fajlovi); $i++) {
        $trenutni = file("novosti_skripte/txt_fajlovi/".$fajlovi[$i]);
        array_push($sortNovost, $fajlovi[$i]);
        array_push($sortDates, $trenutni[0]);
    }


    $change = true;
    while($change == true) {
        $change = false;
        for ($i = 0; $i < count($sortNovost) - 1; $i++) {
            if (new DateTime($sortDates[$i]) < new DateTime($sortDates[$i+1])) {
                $temp = $sortDates[$i+1];
                $sortDates[$i+1] = $sortDates[$i];
                $sortDates[$i] = $temp;
                $temp = $sortNovost[$i+1];
                $sortNovost[$i+1] = $sortNovost[$i];
                $sortNovost[$i] = $temp;
                $change = true;
            }
        }
    }

    for ($i=0; $i<count($sortNovost); $i++):
        $sadrzaj = file("novosti_skripte/txt_fajlovi/".$sortNovost[$i]);

    if (count($sadrzaj) < 5 || strlen($sadrzaj[0]) < 10 || strlen($sadrzaj[1]) < 3 || strlen($sadrzaj[2]) < 3 || strlen($sadrzaj[4]) < 3) { continue; }

    $opis = "";
    $detaljnije = "";
    $imaDetaljnije = false;

    for ($j = 4; $j < count($sadrzaj);$j++) {
        if($sadrzaj[$j] == "--\r\n" || $sadrzaj[$j] == "--\n" || (strpos($sadrzaj[$j], "--") && strlen($sadrzaj[$j]) == 3)) {
            $imaDetaljnije = true;
            continue;
        }
        if ($imaDetaljnije == false) { $opis .= " ".$sadrzaj[$j]; }
        else { $detaljnije .= " ".$sadrzaj[$j]; }
    }
?>

<div class="novost">
    <div class="<?php if($sadrzaj[1] == "\r\n") echo "novostiTekstBezSlike"; else echo "novostiTekst"; ?>">
        <p class="novostiMaliDio">
            <br>
            <?=htmlentities($sadrzaj[1])?>
        <br>
        Autor: <?=htmlentities($sadrzaj[1])?></p>
        <a class="vise" style="cursor: pointer; visibility: <?php if($imaDetaljnije == true) print "visible"; else print "hidden"; ?>" onclick="ucitajStranicuAsinhrono('novosti_skripte/novostDetaljnije.php?naslov=<?=urlencode(ucfirst(strtolower($sadrzaj[2])))?>&tekst=<?=urlencode($detaljnije)?>&opis=<?=urlencode($opis)?>&datum=<?=urlencode($sadrzaj[0])?>&autor=<?=urlencode($sadrzaj[1])?>&slika=<?=urlencode($sadrzaj[3])?>')">Detaljnije</a>
        <h3><?=ucfirst(strtolower(htmlentities($sadrzaj[2])))?></h3>
        <p><?=$opis?></p>
    </div>
    <?php if($sadrzaj[3] != "\r\n"): ?>
    <img src="<?=htmlentities($sadrzaj[3])?>" alt="Pregled">
    <?php endif; ?>
    <div class="razmak"></div>
</div>

<?php endfor; ?>