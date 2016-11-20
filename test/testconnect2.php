
<?
$host = 'localhost';	//เน�เธชเน�เธ•เธฒเธก Server name เน�เธ�เธฃเธนเธ�เธ�เน�เธฒเธ�เธ�เธ�
$user = 'root';			//เน�เธชเน�เธ•เธฒเธก Login
$pass = 'root';		//เน�เธชเน�เธ•เธฒเธก Password
$db = 'test_db';

$link = @mssql_connect($host,$user,$pass,$db) or die ("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
//@mssql_query("SET NAMES TIS620");
//@mssql_query("SET character_set_results=tis620");
//mssql_close($objConnect);

$host2 = 'localhost';	//เน�เธชเน�เธ•เธฒเธก Server name เน�เธ�เธฃเธนเธ�เธ�เน�เธฒเธ�เธ�เธ�
$user2 = 'root';			//เน�เธชเน�เธ•เธฒเธก Login
$pass2 = 'root';		//เน�เธชเน�เธ•เธฒเธก Password
$db2 = 'test2';

$link2 = @mssql_connect($host2,$user2,$pass2,$db2) or die ("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
?>
