<?php
define("ServerNAV","192.168.10.211");
define("LocationNAV","dbo.[Chiangmai Siam TV$");
define("UserNameNAV","webaccress");
define("PassWordNAV","password");
define("DbNameNAV","[SiamTV-edp]");

$link = mssql_connect(ServerNAV,UserNameNAV,PassWordNAV,DbNameNAV) or die ("??????????????????????????????");
?>