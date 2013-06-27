<?php
echo 'ok'.rand(0,100);
class DataBase {
	private $con;
	//private $dababase;
	function _construct($host,$username,$password)
	{
		$this->con =mysql_connect("localhost","root","root") or die('not connet'. mysql_error());
	}
	
	//select a database, or creat a database if the database does not exist.
	function select_db($db_name)
	{	
		echo "come in select_db"."<br>";
		$str_create_db="CREATE DATABASE ".$db_name;
		$select=mysql_select_db($db_name,$this->con);
		if(!$select)
			{
				if (!mysql_query($str_create_db,$this->con))
					{
						echo mysql_error();
						return mysql_error();
					}
				else 
					{	
						echo "create db success";
						mysql_select_db($db_name,$con);
					}
			} 
		//$this->databse=$db_name;
		return 1;
	}
	
	//create table in database
	function create_table ($str_create,$db_name,$tb_name)
	{
		if(query_tb($db_name,$tb_name))
		{
			echo "query_tb success";
		}
		else 
		{
			echo "query_tb failure";
			mysql_query($str_create,$this->con);
		}	
		echo_br();
		return 1;
	}
	
	//insert
	function insert($str_insert)
	{
		if(mysql_query($str_insert,$this->con))
		{
			echo "insert success";
		}
		else 
		{
			echo "insert failure";
			die(mysql_error());
		}	
		return 1;
	}
	
	//query
	function query($str_query)
	{
		$result=mysql_query($str_query);
		while($row=mysql_fetch_assoc($result))
		{
			echo $row[accID];
			echo_br();
			echo $row['user'];
			echo_br();
			echo $row['pwd'];
			echo_br();
		}
		return 1;
	}
	
	//check whether a table exists
	function query_tb($db_name,$tb_name)
	{
	    $result = mysql_list_tables($db_name);		  
		$i=0;  
		while($i<mysql_num_rows($result))
		{
			if ($tb_name == mysql_tablename($result,$i)) 
			{
				return 1;
			}						  
			$i++;     
		}
		return 0;
	}
}
?>