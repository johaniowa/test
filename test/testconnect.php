<html>
<head>

</head>
<body>
<?

function ConnectServer($server,$username,$password,$dbname){
	//echo $server.$username,$password,$dbname;
	$objConnect = mssql_connect($server, $username, $password) or die("เน�เธกเน�เธชเธฒเธกเธฒเธฃเธ–เน€เธ�เธทเน�เธญเธกเธ•เน�เธญ Database เน�เธ”เน� เน€เธ�เธทเน�เธญเธ�เธ�เธฒเธ� Username / Password เน�เธกเน�เธ–เธนเธ�เธ•เน�เธญเธ�");
	if (empty($objConnect )){
		echo "เน�เธกเน�เธชเธฒเธกเธฒเธฃเธ–เน€เธ�เธทเน�เธญเธกเธ•เน�เธญ Database เน�เธ”เน� เน€เธ�เธทเน�เธญเธ�เธ�เธฒเธ� Username / Password เน�เธกเน�เธ–เธนเธ�เธ•เน�เธญเธ�";
	}
	$objDB = mssql_select_db($dbname) or die("Error Select Database $dbname");
}
	
$host = 'localhost';	//เน�เธชเน�เธ•เธฒเธก Server name เน�เธ�เธฃเธนเธ�เธ�เน�เธฒเธ�เธ�เธ�
$user = 'root';			//เน�เธชเน�เธ•เธฒเธก Login
$pass = 'root';		//เน�เธชเน�เธ•เธฒเธก Password
$db = 'test_db';


$objConnect = ConnectServer($host,$user,$pass,$db);
if(!$objConnect) {
	echo "Database Connected.";
}
else {
	echo "Database Connect Failed.";
}

//mssql_close($objConnect);
?>
</body>
</html>