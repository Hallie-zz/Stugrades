<?php
	require dirname(__FILE__)."/dbconfig.php";
	class db
	{
		public $conn=NULL;
		
		public function __construct($config)
		{
		$this->conn=mysql_connect($config['host'],$config['username'],$config['password']) or die(mysql_error());
		mysql_select_db($config['database'],$this->conn) or die(mysql_error());
		mysql_query('SET NAMES UTF8');	
		}
		public function getResult($sql)
		{
			$resource=mysql_query($sql,$this->conn) or die(mysql_error());
			$res=array();
			while(($row=mysql_fetch_assoc($resource))!=false)
			{
				$res[]=$row;
			}
			return $res;
		}
		public function getData($sql)
		{
			$res=self::getResult($sql);
			return $res;
		}
	}
?>