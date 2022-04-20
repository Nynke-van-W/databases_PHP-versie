<?php
// met dubbele slashes maak je een commentaarregel
echo 'Hello <strong>world</strong>!!';

$lijst = array("plaats" => 'Groningen', "meter" => "samsung");
echo print_r($lijst);

echo "ik heb in weerstation in".$lijst["plaats"]." en de meter is van ".$lijst["meter"];
?>