<html>
<?php include 'database.php';
echo "up"."<br/>";
//connect to database
$con=mysql_connect("localhost","root","root") or die('not connet'. mysql_error());

//Select a database
$db_name="test_db";
if(select_db($db_name,$con))
	{
		echo "select_db success";
	}
else 
	{
		echo "select_db failure";
	}
echo_br();

//create table in database
$tb_name="stocc";
$str_create_tb="CREATE TABLE ".$tb_name."
(
accID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(accID),
user varchar(15),
pwd varchar(15)
)";
if(query_tb($db_name,$tb_name))
	{
		echo "query_tb success";
	}
else 
	{
		echo "query_tb failure";
		mysql_query($str_create_tb,$con);
	}	
echo_br();

//insert
echo $_POST[user];
echo_br();
echo $_POST[pwd];
echo_br();
$str_insert="INSERT INTO ".$tb_name." (user, pwd)
VALUES ('$_POST[user]','$_POST[pwd]')";
if(mysql_query($str_insert,$con))
	{
		echo "insert success";
	}
else 
	{
		echo "insert failure";
		die(mysql_error());
	}	
echo "start query";
//query
$result=mysql_query("SELECT * FROM stocc;");
while($row=mysql_fetch_assoc($result))
{
	echo $row[accID];
	echo_br();
	echo $row['user'];
	echo_br();
	echo $row['pwd'];
	echo_br();
}
mysql_close($con);

?>
</html>

