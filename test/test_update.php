<html>
<head>
</head>
<?php
include 'testconnect2.php';

?>

<body>
<?php 
$query = "UPDATE [test_db].[dbo].[tb_test1] SET name = 'ประวิทย์ ', address = 'เชียงใหม่',email='prawit@gmail.com' WHERE id='24'";
$result = mssql_query($query,$link) or die ("couldn't execute query");

if(!$result){
	echo "update failed";
}else{
	echo "update success";
}
?>
</body>
</html>
