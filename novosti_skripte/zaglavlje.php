<header>
	<a onclick="ucitavajStranicuAsinhrono('index.php')">
		<h1><img src="slike/logo.png" alt=""></h1>
	</a>
	<nav>
		<ul id="vrh_nav">
			<li><a onclick="ucitajStranicuAsinhrono('index.php')"><img src="slike/ikona_1.gif" alt=""></a></li>
			<li><a onclick="ucitajStranicuAsinhrono('galerija.php')"><img src="slike/ikona_2.gif" alt=""></a></li>
			<li class="kraj"><a onclick="ucitajStranicuAsinhrono('kontakt.php')"><img src="slike/ikona_3.gif" alt=""></a></li>
		</ul>
	</nav>
	<nav>
		<ul id="meni">
			<li><a onclick="ucitajStranicuAsinhrono('index.php')">Naslovnica</a></li>
			<li id="galerija" onmouseover="galerija_Prikazi()" onmouseout="galerija_Sakrij()"><a onclick="ucitajStranicuAsinhrono('galerija.php')">Galerija</a>
				<ul id="submeni" onmouseover="galerija_Prikazi()">
					<li><a onclick="ucitajStranicuAsinhrono('galerija.php')">Enterijer</a></li>
					<li><a onclick="ucitajStranicuAsinhrono('galerija.php')">Eksterijer</a></li>
					<li><a onclick="ucitajStranicuAsinhrono('ponuda.php')">Ponuda</a></li>
				</ul>
			</li>
			<li><a onclick="ucitajStranicuAsinhrono('meni.php')">Meni</a></li>
			<li><a onclick="ucitajStranicuAsinhrono('recepti.php')">Recepti</a></li>
			<li><a onclick="ucitajStranicuAsinhrono('kontakt.php')">Kontakt</a></li>
		</ul>
	</nav>
</header>