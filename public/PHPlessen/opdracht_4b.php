<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$leerling=array('nr' => 152051, 'voornaam' => 'Nynke', 'achternaam' => 'van Wijngaarden', 'geboortejaar' => 2005);

echo "<pre>Leerling:";
print_r($leerling);
echo "</pre>".$leerling["voornaam"]. " werd geboren in ".$leerling['geboortejaar']."";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>