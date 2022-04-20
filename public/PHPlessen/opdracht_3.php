<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$waarde=9/10;
$kwad=pow($waarde,2);
$rec=1/$kwad;
$afgerond=round($rec,7);
$afgerond2=floor($rec);
echo "Het kwadraat van $waarde is $kwad.<br>
      Het omgekeerde daarvan is (afgerond:) $afgerond<br>
      Het omgekeerde daarvan is (afgerond:) $afgerond2<br>";

$a=2;
$b=12;
$c=round(sqrt(pow($a,2)+pow($b,2)),1);
$mod = fmod($a,$b);

echo "stelling van pythagoras waarbij a: $a en b: $b, dan is c: $c <br>
en een rest can $mod";
/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>