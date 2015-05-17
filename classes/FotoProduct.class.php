<?php
include_once("Db.class.php");
class FotoProduct{

	private $m_sFotourl;
	private $m_iProductid;

		public function __set($p_sProperty,$p_vValue)
		{
			switch ($p_sProperty)
			{
				case 'Fotourl':
					$this->m_sFotourl = $p_vValue;
					break;
				case 'Productid':
					$this->m_iProductid = $p_vValue;
					break;							
			}
		}

	public function __get($p_sProperty)
	{
		switch ($p_sProperty)
		{
				case 'Fotourl':
					return $this->m_sFotourl;
					break;
				case 'Productid':
					return $this->m_iProductid;
					break;								
			}
	}

	public function getFotoProduct($id)
		{
			$db = new Db();
			$query = "SELECT fotourl FROM fotoproduct WHERE productid ='".$db->conn->real_escape_string($id)."' LIMIT 1";
			 return $db->conn->query($query);

		}


}
?>