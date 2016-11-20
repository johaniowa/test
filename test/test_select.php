<?php
include 'testconnect2.php';
$link1 = mssql_connect($host, $user, $pass);
$link2 = mssql_connect($host2, $user2, $pass2, true); 
mssql_select_db($db, $link1); 
mssql_select_db($db2, $link2);


$query_select = mssql_query("select * FROM [test_db].[dbo].[tb_test1]
				 			 FULL OUTER JOIN [test2].[dbo].[tb_test2] 
							 ON [test_db].[dbo].[tb_test1].[id] = [test2].[dbo].[tb_test2].[id]",$link1,$link2);


if(mssql_num_rows($query_select) == 0){
	echo "no data in table";
}else{
	echo "<table border='1'>";
		echo "<tr><td colspan='6' align='center'>แสดงข้อมูลจาก database 2 ลูก</td></tr>";
		echo "<tr>";
		echo "<td align='center'>ID</td>";
		echo "<td align='center'>Name</td>";
		echo "<td align='center'>Address</td>";
		echo "<td align='center'>Email</td>";
		echo "<td align='center'>Birthday</td>";
		echo "<td align='center'>Section</td>";
		echo "</tr>";
		while($data = mssql_fetch_array($query_select)){
			echo "<tr>";
			echo "<td align='left'>{$data['id']}</td>";
			echo "<td align='left'>{$data['name']}</td>";
			echo "<td align='left'>{$data['address']}</td>";
			echo "<td align='left'>{$data['email']}</td>";
			echo "<td align='left'>{$data['birthday']}</td>";
			echo "<td align='left'>{$data['section']}</td>";
			echo "</tr>";
		}
	
	echo "</table>";
	
}

?>