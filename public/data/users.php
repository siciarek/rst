<?php
header('Content-type: text/plain;charset=UTF-8');

$data = <<<CSV
"pracownik","dział","liczba pobrań"
"Agnieszka Bachanek","IT","1464"
"Tomasz  Gęsikowski","RKS","1055"
"Piotr Witkowski","RKS","738"
"Przemysław Przyniczka","RKS","685"
"Wiktor Skórczewski","RKS","518"
"Dariusz  Armatowski","RKS","496"
"Marcin Paździorko","Handel","476"
"Marcin Bizewski","RKS","421"
CSV;

echo $data;