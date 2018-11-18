<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" lang="DE"/>
<link href="Style.css" media="all" rel="Stylesheet" type="text/css" /> 
  <title>Ergebnis</title>
</head>

<body>
    <h1>Ergebnis</h1>
    
    <?php
        
        $a1name = $_POST['a1name'];
        $a1preis = $_POST['a1preis'];
        $a2name = $_POST['a2name'];
        $a2preis = $_POST['a2preis'];
        $a3name = $_POST['a3name'];
        $a3preis = $_POST['a3preis'];
        $umsatzsteuer = $_POST['umsatzsteuer'];
        $s = $umsatzsteuer/100;
        $ns = $a1preis+$a2preis+$a3preis;
        $us = $ns*$s;
    
    echo "<p>
        $a1name: $a1preis €<br>
        $a2name: $a2preis €<br>
        $a3name: $a3preis €<br>
        </p>";
    
    echo "<p>";
    echo "Nettosumme: ";
    echo $a1preis+$a2preis+$a3preis;
    echo "€";
    echo "<br>";
    
    echo "Umsatzsteuer: ";
    echo $umsatzsteuer;
    echo "%";
    echo "<br>";
        
    echo "Bruttosumme: ";
    echo $ns+$us;
    echo "€";
    echo "<br>"; 
    echo "</p>";
    ?>
    <form action="index.php">
    <input type="submit" value="Zurück">
    </form>
    <script>
	window.onbeforeunload = function() {
   	return "Sind Sie sich sicher, dass sie ihre Eingabe wiederrufen möchten?";
	};
	</script>
</body>