<?php

$meses = array(
    "janeiro","fevereiro","março",
    "abril","maio","junho",
    "julho","agosto","setembro",
    "outubro","novembro","dezembro"
);

foreach ($meses as $index => $mes) {
    echo "indice " . $index . "<br>";
    echo "O mes é : " . $mes . "<br><br>";
}
