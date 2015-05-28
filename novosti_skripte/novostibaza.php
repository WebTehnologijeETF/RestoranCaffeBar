<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Aurora restoran | Naslovna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  </head>
  <body id="novostibaza">
    <div class="novost">
      <div class="novostiTekstBaza">
        <?php
         $veza = new PDO("mysql:dbname=restoranwt;host=localhost;charset=utf8", "restoranwt", "restoranwt");
         $veza->exec("set names utf8");
         $rezultat = $veza->query("select id, naslov, tekst, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor from vijest order by vrijeme desc");
         if (!$rezultat) {
              $greska = $veza->errorInfo();
              print "SQL greška: " . $greska[2];
              exit();
         }

         foreach ($rezultat as $vijest) {
            print "<br><h1 style> Novost:  " . $vijest['naslov'] . "</h1><br>";
            print "<small> Autor:  " . $vijest['autor'] . "</small><br>";
            print "<small> Datum: " . date("d.m.Y (h:i)", $vijest['vrijeme2']) . "</small><br>";
            print "<br><p>" . $vijest['tekst'] . "</p>";
         }
        ?>
      </div>
  </div>
  </body>
</html>