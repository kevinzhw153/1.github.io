<?php
    $databaseConnection = null;
    function getConnect() {
        $hosthome = "localhost";
        $database = "register";
        $userName = "root";
        $password = "123456";
        global $databaseConnection;
        $databaseConnection = @mysql_connect($hosthome, $userName, $password) or die (mysql_error());
        mysql_query("set names gbk");
        @mysql_select_db($database, $databaseConnection) or die (mysql_error());
    }
    
    function closeConnect() {
        global $databaseConnection;
        if ($databaseConnection) {
            @mysql_close($databaseConnection) or die (mysql_error());
        }
    }
?>
