<?php
/**
 * Created by PhpStorm.
 * User: egrove
 * Date: 4/11/17
 * Time: 8:47 PM
 */
include ("employee.php" );
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

$sathish= new profile("sathishkumar V G");
$haymanth = new employee("Govindaraju Muthukrishnan");

//$sathish->set_name("Sathish kumar");
//$haymanth->set_name("Govindaraj");

echo ("Sathish full name : " . $sathish->get_name()."<br />");
echo ("Haymanth full name : " . $haymanth->get_name());

//echo ("<br /> Pin Number :". $sathish->get_pin());
?>