<?php

$servername="localhost"; 
$dbUsername="root";
$dbPassword="";
$dbName="project_student";

$conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if(!$conn)
{
	die("Connect failed : ".mysqli_connect_error());
}