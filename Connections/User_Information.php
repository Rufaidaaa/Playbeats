<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_User_Information = "localhost";
$database_User_Information = "user_registration";
$username_User_Information = "admin";
$password_User_Information = "02136660711...";
$User_Information = mysql_pconnect($hostname_User_Information, $username_User_Information, $password_User_Information) or trigger_error(mysql_error(),E_USER_ERROR); 
?>