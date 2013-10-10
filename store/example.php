<?php

//Example Script, saves Hello World to the database.

//First, we need to include redbean
require_once('rb.php');

//Second, we need to setup the database

//If you work on Mac OSX or Linux (or another UNIX like system)
//You can simply use this line:

R::setup('sqlite:/school.db'); 				//sqlite //This creates an SQLite database in /tmp

//Ready. Now insert a bean!
$bean = R::dispense('students');
$bean->name = 'Mary Jane';
$bean->grade = 89.34;

//Store the bean
$id = R::store($bean);

//Reload the bean
$students = R::load('students',$id);

//Display the title
echo $students->name;
echo $students->grade;