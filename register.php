<?php
error_reporting();
if(!mysql_connect("localhost","root","","login"))
{
	die('oops connection problem ! --> '.mysqli_error());
}
if(!mysql_select_db("login"))
{
	die('oops database selection problem ! --> '.mysqli_error());
}

?>