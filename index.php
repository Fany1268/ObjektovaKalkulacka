<!DOCTYPE html>
<html lang="cs-cz">
<head>
	<meta charset="utf-8"/>
	<title>Objektová kalkulačka</title>
</head>
<body>

	<h1>Objektová kalkulačka</h1>
        <form method="POST" action="kalkulacka.php">
            <input name='cislo1' type="text" /><br />
            <input name='cislo2' type="text" /><br />
            Operace:
            <select name="operace">
                <option value="scitani">Sčítání</option>
                <option value="odecitani">Odečítání</option>
                <option value="nasobeni">Násobení</option>
                <option value="deleni">Dělení</option>
            </select></br>
                <input type="submit" value="Vypočítej" />
        </form>
	

	<?php                           //OPRAVIT NEFUNGUJE, NEBO PŘEPSAT
		//require_once('tridy/Kalkulator.php');
          spl_autoload_register("nactiTridu");        
        function nactiTridu(string $trida): void
        {
            require("tridy/$trida.php");
        }
        

		// Reakce na odeslání formuláře
		if ($_POST)
		{
			$kalkulacka = new Kalkulator();
			$kalkulacka->cislo1 = $_POST['cislo1'];
			$kalkulacka->cislo2 = $_POST['cislo2'];
                       
                                
			echo("<h2>Výsledky</h2>");
			echo('Součet: ' . $kalkulacka->soucet() . '<br />');
			echo('Rozdíl: ' . $kalkulacka->rozdil() . '<br />');
			echo('Součin: ' . $kalkulacka->soucin() . '<br />');
			echo('Podíl: ' . $kalkulacka->podil() . '<br />');
                        echo('Na druhou: ' . $kalkulacka->naDruhou() . '<br />');
                        
                }
	?>

<body>
</html>
