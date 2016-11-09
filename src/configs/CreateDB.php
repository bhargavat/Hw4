<?php
	namespace cool_name_for_your_group\hw4\src\configs\createDB;
	
	$link = mysqli_connect('localhost', 'root', '');
	if (!$link) {
    		die('Not connected : ' );	
	}
	else{
		
	//require_once 'config.php';
    $query[] = "CREATE DATABASE IF NOT EXISTS HW4;";
	//use Databse HW4
	$query[] = "use HW4";

//	//CREATE TABLE GENRE AND INSERT VALUES INTO IT.
    $query[] = "DROP TABLE IF EXISTS Chart_Data;";
	$query[] = "CREATE TABLE Chart_Data(chart_hash_value varchar(32) NOT NULL,
                chart_title varchar(30) NOT NULL, chart_data varchar(80), PRIMARY KEY (chart_hash_value)) ;";
	
	foreach($query as $que){
            if (mysqli_query($link, $que)) {
                echo "successfully";
            } 
        }
	}
