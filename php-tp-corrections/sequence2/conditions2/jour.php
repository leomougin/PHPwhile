<?php

echo "Aujourd'hui nous sommes le " . date("d/m/Y");
echo PHP_EOL;
$jour =  date('D');
if ($jour == "Sat") {
    echo "Je vous souhaite un bon week-end";
} elseif ($jour == "Sun") {
    echo "Je vous souhaite un bon dimanche";
} else {
    echo "Je vous souhaite une bonne journée";
}