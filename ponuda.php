<!-- Restoran Aurora - Galerija -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Aurora | Ponuda</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	</head>

<body id="str2">
	<div class="body4">
		<div class="body1">
			<div class="main grid">
				<?php include("zaglavlje.php"); ?>
				<article id="sadrzaj">
					<div class="wrap">
						<section class="col-1-3">
							<div class="wrap-col">
								<div class="box">
									<div>
										<h2>Da li ste <span>Znali ... ?</span></h2>
										<figure><img src="slike/galerija0.jpg" width="250" height="150"></figure>
										<p class="pad_dno1">
											... da su ljekovita svojstva jagode poznata još od antičkih vremena? Osim ploda, za liječenje se može koristiti korijen i  lišće jagode. Čaj od lišća jagode stoljećima se rabi kao lijek protiv probavnih smetnji, ekcema, upale grla, gripe i prehlade te u liječenju kostobolje.
										</p>
										<a href="http://alternativa-za-vas.com/index.php/clanak/article/jagoda" class="dugme1">Detaljnije...</a>
									</div>
								</div>
							</div>
						</section>

						<section class="col-1-3">
							<div class="wrap-col">
								<div class="box">
									<div>
										<h2>Da li ste <span>Znali ... ?</span></h2>
										<figure><img src="slike/galerija0_1.jpg" width="250" height="150"></figure>
										<p class="pad_dno1">
											... da riječ „curry” potiče od južnoindijske tamilske riječi „kari” (umak)? Englezi su začin otkrili u 18. vijeku u južnoj Aziji i preoblikovali su indijsku reč „kari” u „curry”.
										</p>
										<figure><img src="slike/galerija0_2.jpg" width="250" height="150"></figure>
										<p class="pad_dno1">
											... da je u srednjem vijeku buketić bosiljka značio poziv na ljubavnu igru?
										</p>
										<a href="" class="dugme1">Detaljnije...</a>
									</div>
								</div>
							</div>
						</section>

						<section class="col-1-3">
							<div class="wrap-col">
								<div class="box">
									<div>
										<h2>Da li ste <span>Znali ... ?</span></h2>
										<figure><img src="slike/galerija0_3.jpg" width="250" height="150"></figure>
										<p class="pad_dno1">
											... da banane sadrže hemikaliju koja čini ljude sretnim?
										</p>
										<figure><img src="slike/galerija0_4.jpg" width="250" height="150"></figure>
										<p class="pad_dno1">
											... da će se dobro kuhano jaje okretati? Nekuhano ili slabo kuhano neće.
										</p>
										<a href="" class="dugme1">Detaljnije...</a>
									</div>
								</div>
							</div>
						</section>
					</div>
				</article>
			</div>
		</div>
	</div>
<div class="body2">
	<div class="main grid">
		<article id="sadrzaj2">
			<main id="obrada-glavno">
     			<div id="tabelaProizvodaDiv">
           			<table id="tabelaProizvoda"></table>
        		</div>

	        	<div id="funkcije">
	            	<h2 class="naslovProizvodi">Odaberite mogućnost za pojedinačni rad:</h2>
	            	<select id="odabir" onchange="izmjenaOdabir()">
	                	<option>Dodavanje</option>
	                	<option>Izmjena</option>
	                	<option>Brisanje</option>
	            	</select>
	            	
	            	<div id="dodavanje">
                		<h2 class="naslovProizvodi">Dodavanje</h2>
                		<table>
		                    <tr>
		                        <td>Naziv:</td>
		                        <td><input type="text" id="nazivDodavanje"></td>
		                    </tr>
		                    <tr>
		                        <td>Opis:</td>
		                        <td><input type="text" id="opisDodavanje"></td>
		                    </tr>
		                    <tr>
		                        <td>Slika:</td>
		                        <td><input type="text" id="slikaDodavanje"></td>
		                    </tr>
		                    <tr>
		                        <td>Url:</td>
		                        <td><input type="text" id="urlDodavanje"></td>
		                    </tr>
		                    <tr>
		                        <td>Cijena:</td>
		                        <td><input type="text" id="cijenaDodavanje"></td>
		                    </tr>
                		</table>

                		<button id="dodaj" class="dugme1" onclick="dodaj()">OK</button>
                		<span id="errorDodaj"></span>
            		</div>

            		<div id="brisanje">
		                <h3 class="naslovProizvodi">Brisanje</h2>
		                <table>
		                    <tr>
		                        <td>
		                            Id:
		                        </td>
		                        <td>
		                            <select id="idBrisanje"></select>
		                        </td>
		                    </tr>
		                </table>

		                <button id="obrisi" class="dugme1" onclick="obrisi()">OK</button>
		                <span id="errorObrisi"></span>
		            </div>

            		<div id="izmjena">
            			<h2 class="naslovProizvodi">Izmjena</h2>
		                <table>
		                    <tr>
		                        <td>Id:</td>
		                        <td><select id="idIzmjena" onchange="izmjenaIzmjene()"></select></td>
		                    </tr>
		                    <tr>
		                        <td>Naziv:</td>
		                        <td><input type="text" id="nazivIzmjena"></td>
		                    </tr>
		                    <tr>
		                        <td>Opis:</td>
		                        <td><input type="text" id="opisIzmjena"></td>
		                    </tr>
		                    <tr>
		                        <td>Slika:</td>
		                        <td><input type="text" id="slikaIzmjena"></td>
		                    </tr>
		                    <tr>
		                        <td>Url:</td>
		                        <td><input type="text" id="urlIzmjena"></td>
		                    </tr>
		                    <tr>
		                        <td>Cijena:</td>
		                        <td><input type="text" id="cijenaIzmjena"></td>
		                    </tr>
		                </table>

		                <button id="izmijeni" class="dugme1" onclick="izmijeni()">OK</button>
		                <span id="errorIzmijeni"></span>
            		</div>

	        	</div>
    		</main>
		</article>
	</div>
</div>
<div class="body3">
	<div class="main grid">
		<footer>
			<div class="wrapper">
				<section class="col-2-3">
					<div class="wrap-col"></div>
				</section>
				<section class="col-1-4">
					<div class="wrap-col">
						<h3>&nbsp; Copyright © 2015<br>&nbsp; Restoran Aurora, Sarajevo</h3>
						<ul id="ikone">
							<li>
								<a href="https://www.google.ba/maps/place/Velika+Aleja,+Ilid%C5%BEa/@43.8226402,18.2958098,17z/data=!3m1!4b1!4m2!3m1!1s0x4758ca71fbb0b335:0xb67b017264e23e9" class="normaltip" title="Location"><img src="slike/ikona4.png" alt=""></a>
							</li>
							<li>	
								<a href="#" class="normaltip" title="Twitter"><img src="slike/ikona3.png" alt=""></a>
							</li>
							<li>
								<a href="https://www.linkedin.com/pub/anesa-drakovac/72/114/b44" class="normaltip" title="LinkedIn"><img src="slike/ikona2.png" alt=""></a>
							</li>
							<li>
								<a href="#" class="normaltip" title="Facebook"><img src="slike/ikona1.png" alt=""></a>
							</li>
						</ul>				
					</div>
				</section>
			</div>
		</footer>
	</div>
</div>
<script src="js/submeni.js"></script>
<script src="js/ucitajStranicuAsinhrono.js"></script>
<script src="js/proizvodi.js"></script>
</body>
</html>