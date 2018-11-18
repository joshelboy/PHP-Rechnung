<?php 
session_start();

if (isset($_POST['a1name']) && ($_POST['a1preis']) && ($_POST['a2name']) && ($_POST['a2preis']) && ($_POST['a3name']) && ($_POST['a3preis']) && ($_POST['umsatzsteuer'])){
    $_SESSION ['a1name'] == $_POST['a1name'];
    $_SESSION ['a1preis'] == $_POST['a1preis'];
    $_SESSION ['a2name'] == $_POST['a2name'];
    $_SESSION ['a2preis'] == $_POST['a2preis'];
    $_SESSION ['a3name'] == $_POST['a3name'];
    $_SESSION ['a3preis'] == $_POST['a3preis'];
    $_SESSION ['umsatzsteuer'] == $_POST['umsatzsteuer'];
    header("Location:ergebnis.php");
    exit();
}
/*else {
    header("Location:falscheeingabe.php");
    exit();
}*/
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" lang="DE" />
<link href="Style.css" media="all" rel="Stylesheet" type="text/css" /> 
	<h1>Eingabe der Daten</h1>
	<body>
		<form action="ergebnis.php" method="post">
				<p>
				<input type="text" name="a1name" value="Artikel 1">
				<input type="number" name="a1preis" value=0 min=0 max=1000> € <br>
				<input type="text" name="a2name" value="Artikel 2">
				<input type="number" name="a2preis" value=0 min=0 max=1000> € <br>
				<input type="text" name="a3name" value="Artikel 3">
				<input type="number" name="a3preis" value=0 min=0 max=1000> € <br>
				<br>
				Umsatzsteuer: <input type="number" name="umsatzsteuer" value=19 min=0 max=100>%
				</p>
				<input type="submit" name="Fortfahren" value="Fortfahren">
		</form>
	</body>