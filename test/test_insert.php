<html>
<head>
</head>
<?php
include 'testconnect2.php';

?>

<body>
<?php 
$query = "INSERT INTO [test_db].[dbo].[tb_test1](name,address,email,birthday) 
		  VALUES('·´ÊÍº','·´ÊÍº','somchai@example.com','1975-01-01')";
$result = mssql_query($query,$link) or die ("couldn't execute query");

if(!$result){
	echo "insert failed";
}else{
	echo "insert success";
}
?>
</body>
</html>
