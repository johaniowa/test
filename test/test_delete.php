<html>
<head>
</head>
<?php
include 'testconnect2.php';

?>

<body>
<?php 
$query = "DELETE FROM [test_db].[dbo].[tb_test1] WHERE id='5'";
$result = mssql_query($query,$link) or die ("couldn't execute query");

if(!$result){
	echo "delete failed";
}else{
	echo "delete success";
}
?>
</body>
</html>
