<?php
	class Db
	{
		private $m_sHost = "localhost";
		private $m_sUser = "trade_be_TAGProj";
		private $m_sPassword = "Tagproject1";
		private $m_sDatabase = "tradeandgrow_be_TAGProj";
		public $conn;


		public function __construct()
		{
			$this->conn = new mysqli($this->m_sHost, $this->m_sUser, $this->m_sPassword, $this->m_sDatabase);
		}
	}
?>