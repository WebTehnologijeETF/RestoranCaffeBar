<?php

	function validacijaIme($ime) {
	    if(strlen(preg_replace('/\s+/', '', $ime)) == 0) return false;
	    return true;
	}

	function validacijaMail($mail) {
	    if(strlen(preg_replace('/\s+/', '', $mail)) == 0 || preg_match('/^[a-z0-9_]+@[a-z.]+\.[a-z][a-z]+$/', $mail) == false) return false;
	    return true;
	}

	function validacijaPonovniMail($mail, $ponovniMail) {
	    if(strlen(preg_replace('/\s+/', '', $mail)) == 0 || $mail != $ponovniMail || preg_match('/^[a-z0-9_]+@[a-z.]+\.[a-z][a-z]+$/', $mail) == false) return false;
	    return true;
	}

	function validacijaPoruka($tekst) {
	    if(strlen(preg_replace('/\s+/', '', $tekst)) == 0) return false;
	    return true;
	}

?>