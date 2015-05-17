<?php
include_once("Db.class.php");
class Product{

	private $m_sVoornaam;
	private $m_sAchternaam;
	private $m_sStraat;
	private $m_iHuisnummer;
	private $m_sHuisnummer_toevoeging;
	private $m_sPostcode;
	private $m_sGemeente;
	private $m_sLand;
	private $m_sTelefoonummer;

	public function __set($p_sProperty,$p_vValue)
		{
			switch ($p_sProperty)
			{
				case 'Voornaam':
					$this->m_sVoornaam = $p_vValue;
					break;
				case 'Achternaam':
					$this->m_sAchternaam = $p_vValue;
					break;
				case 'Straat':
					$this->m_sStraat = $p_vValue;
					break;
				case 'Huisnummer':
					$this->m_iHuisnummer = $p_vValue;
					break;
				case 'Huisnummer_toevoeging':
					$this->m_sHuisnummer_toevoeging = $p_vValue;
					break;
				case 'Postcode':
					$this->m_sPostcode = $p_vValue;
					break;
				case 'Gemeente':
					$this->m_sGemeente = $p_vValue;
					break;
				case 'Land':
					$this->m_sLand = $p_vValue;
					break;
				case 'Telefoonnummer':
					$this->m_sTelefoonnummer = $p_vValue;
					break;						
			}
		}

	public function __get($p_sProperty)
	{
		switch ($p_sProperty)
		{
				case 'Voornaam':
					return $this->m_sVoornaam;
					break;
				case 'Achternaam':
					return $this->m_sAchternaam;
					break;
				case 'Straat':
					return $this->m_sStraat;
					break;
				case 'Huisnummer':
					return $this->m_iHuisnummer;
					break;
				case 'Huisnummer_toevoeging':
					return $this->m_sHuisnummer_toevoeging;
					break;
				case 'Postcode':
					return $this->m_sPostcode;
					break;
				case 'Gemeente':
					return $this->m_sGemeente;
					break;
				case 'Land':
					return $this->m_sLand;
					break;
				case 'Telefoonnummer':
					return $this->m_sTelefoonnummer;
					break;						
			}
	}

	public function getProducten()
		{
			$db = new Db();
			$query = "SELECT * FROM product";

			 $result = $db->conn->query($query);
			 return $result;


		}


}
?>