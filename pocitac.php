<?php
$nadpis1="Profil mého počitace";
$name="Herni PC";
$vyrobce="Lenovo";
$ram=16;
$uloziste=1.5;
$ssd=true;
$ops="Windows 11";
$nadpis2="Datové typy";

echo "<h1>".$nadpis1."</h1>";
echo "<p><strong>".$name."</strong></p>";
echo "<p><strong>".$vyrobce."</strong></p>";
echo "<p><strong>".$ram."</strong></p>";
echo "<p><strong>".$uloziste."</strong></p>";
echo "<p><strong>".$ssd."</strong></p>";
echo "<p><strong>".$ops."</strong></p>";

echo "<h1>".$nadpis2."</h1>";
echo "<strong>".var_dump($nadpis1)."</strong>";
echo "<br>";
echo var_dump($name);
echo "<br>";
echo var_dump($vyrobce);
echo "<br>";
echo var_dump($ram);
echo "<br>";
echo var_dump($uloziste);
echo "<br>";
echo var_dump($ssd);
echo "<br>";
echo var_dump($ops);
echo "<br>";
echo var_dump($nadpis2);







