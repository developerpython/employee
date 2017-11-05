<?php
/**
 * Created by PhpStorm.
 * User: egrove
 * Date: 4/11/17
 * Time: 8:47 PM
 */
include ("employee.php" );

$sathish= new profile();
$haymanth = new profile();

$sathish->set_name("Sathish kumar");
$haymanth->set_name("Govindaraj");

echo ("Sathish full name : " . $sathish->get_name()."<br />");
echo ("Haymanth full name : " . $haymanth->get_name());

?>