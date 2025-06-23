<?php

$score = 90;
$score = rand(0, 100);
if ($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} elseif ($score >= 70) {
    echo "C";
} else {
    echo "Onvoldoende";
}
echo "<br>Je hebt {$score} gescoord."

?>