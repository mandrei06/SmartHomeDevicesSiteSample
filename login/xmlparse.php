<?php

$filepost=  file_get_contents("php://input"); 
$xml = new SimpleXMLElement($filepost); 

foreach ($xml->home as $home)
{
$uname = $home->name;
$uadress = $home->adress;
$urooms = $home->rooms;
$udescription=$home->description;
}


?>