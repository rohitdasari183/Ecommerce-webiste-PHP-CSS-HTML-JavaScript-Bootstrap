<?php

$DBhost="localhost";
$DBuser="root";
$DBpass="";
$DBname="ecommerce";

$DBcon=new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
if($DBcon->connect_errno)
{
    die($DBcon->connect_error);
}

?>