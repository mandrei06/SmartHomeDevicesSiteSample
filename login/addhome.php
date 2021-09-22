<?php
$Nume = "";
$Adresa = "";
$Camere = "";
$Descriere="";

$Nume = $_POST["nume"];
$Adresa = $_POST["adresa"];
$Camere = $_POST["text"];
$Descriere=$_POST["descriere"];
echo $Nume," ",$Adresa," ",$Camere," ",$Descriere;


$houses = array();
$houses  = array(
    'nume' => $Nume,
    'adresa' => $Adresa,
    'camere' => $Camere,
    'descriere'=>$Descriere
);


$filePath='houses.xml';
$dom= new DOMDocument('1.0','utf-8');
$root=$dom->createElement('houses');

$house=$dom->createElement('house');
$name=$dom->createElement('nume',$Nume);
$house->appendChild($name);
$adress=$dom->createElement('adress',$Adresa);
$house->appendChild($adress);
$rooms=$dom->createElement('rooms',$Camere);
$house->appendChild($rooms);
$description=$dom->createElement('description',$Descriere);
$house->appendChild($description);
$root->appendChild($house);
$dom->appendChild($root);
$dom->save($filePath);



error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"logare");
session_start();



$xmldata = simplexml_load_file("houses.xml") or die("Failed to load");
foreach($xmldata->children() as $elm) {
    echo $elm->nume . ", ";
    echo $elm->adress . ", ";
    echo $elm->rooms . ", ";
    echo $elm->description . "<br>";
    $query = "INSERT INTO home (nume,adress,rooms,description) VALUES ('$elm->nume','$elm->adress','$elm->rooms',' $elm->description')";
    mysqli_query($db, $query);

}

//redirect("http://localhost/login_secure/login/func1.php");
header('location:func1.php');
?>

