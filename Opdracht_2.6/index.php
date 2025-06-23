<?php
$score = "99";
$score = rand(0, 100);
switch ($score) {
    case ($score >= 90):
        echo "Geweldig<br>";
        break;
    case ($score >= 75):
        echo "Goed<br>";
        break;
    case ($score >= 55):
        echo "Voldoende<br>";
        break;
    default:
    echo "Onvoldoende<br>";
}
echo "U heeft {$score} gescoord." . (($score >= 55) ? " Geslaagd" : " Gezakt");
?>