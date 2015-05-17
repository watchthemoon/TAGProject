<?php
include_once("Db.class.php");
class Product{

	private $m_sTitel;
	private $m_sBeschrijving;
	private $m_sStraat;
	private $m_iHuisnummer;
	private $m_sHuisnummer_toevoeging;
	private $m_sPostcode;
	private $m_sGemeente;
	private $m_sLand;
	private $m_sCategorie;
	private $m_iUserid;

		public function __set($p_sProperty,$p_vValue)
		{
			switch ($p_sProperty)
			{
				case 'Titel':
					$this->m_sTitel = $p_vValue;
					break;
				case 'Beschrijving':
					$this->m_sBeschrijving = $p_vValue;
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
				case 'Categorie':
					$this->m_sCategorie = $p_vValue;
					break;	
				case 'Userid':
					$this->m_iUserid = $p_vValue;
					break;							
			}
		}

	public function __get($p_sProperty)
	{
		switch ($p_sProperty)
		{
				case 'Titel':
					return $this->m_sTitel;
					break;
				case 'Beschrijving':
					return $this->m_sBeschrijving;
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
				case 'Categorie':
					return $this->m_sCategorie;
					break;
				case 'Userid':
					return $this->m_iUserid;
					break;								
			}
	}

	public function getPopProducten()
		{
			$db = new Db();
			$query = "SELECT * FROM product ORDER BY productid LIMIT 3";
			 return $db->conn->query($query);
		}

	public function getMaandProducten()
		{
			$db = new Db();
			$query = "SELECT * FROM product ORDER BY titel LIMIT 3";
			 return $db->conn->query($query);
		}	

	public function getProductDetail($id)
		{
			$db = new Db();
			$query = "SELECT * FROM product WHERE productid ='".$db->conn->real_escape_string($id)."' LIMIT 1";
			return $db->conn->query($query);
		}		




}
?>