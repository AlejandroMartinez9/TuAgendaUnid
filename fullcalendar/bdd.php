<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=calendar;charset=utf8', 'root', '1234');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
