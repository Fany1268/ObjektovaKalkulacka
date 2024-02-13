<?php

class Kalkulator
{
	
	public int $cislo1;
	
	public int $cislo2;
        
       

	/**
	 * Vrací součet atributů
	 * require_once('tridy/Kalkulator.php');

		// Reakce na odeslání formuláře
		if ($_POST)
		{
			$kalkulacka = new Kalkulator();
			$kalkulacka->cislo1 = $_POST['cislo1'];
			$kalkulacka->cislo2 = $_POST['cislo2'];
                        $kalkulacka->cislo3 = $_POST['cislo3'];
                                
			echo("<h2>Výsledky</h2>");
			echo('Součet: ' . $kalkulacka->soucet() . '<br />');
			echo('Rozdíl: ' . $kalkulacka->rozdil() . '<br />');
			echo('Součin: ' . $kalkulacka->soucin() . '<br />');
			echo('Podíl: ' . $kalkulacka->podil() . '<br />');
                        echo('Na druhou: ' . $kalkulacka->naDruhou() . '<br />');
                        
                }@return float Součet
	 */
	public function soucet(): int
	{
		return $this->cislo1 + $this->cislo2;
	}

	/**
	 * Vrací rozdíl atributů
	 * @return float Rozdíl
	 */
	public function rozdil(): float
	{
		return $this->cislo1 - $this->cislo2;
	}

	/**
	 * Vrací součin atributů
	 * @return float Součin
	 */
	public function soucin(): float
	{
		return $this->cislo1 * $this->cislo2;
	}

	/**
	 * Vrací podíl atributů
	 * @return float Podíl
	 * @throws DivisionByZeroError Pokud je druhé číslo 0
	 */
	public function podil(): float
	{
		return $this->cislo1 / $this->cislo2;
	}
        
        public function naDruhou(): float
        {
                return $this->cislo3 * $this->cislo3;
        }
} 
  