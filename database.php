<?php
function echo_br()
	{
		echo "<br>";
	}
	
function select_db($db_name,$con)
	{	
		echo "come in select_db"."<br>";
		$str_create_db="CREATE DATABASE ".$db_name;
		if(!mysql_select_db($db_name,$con))
			{
				if (!mysql_query($str_create_db,$con))
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
		return 1;
	}
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
?>
