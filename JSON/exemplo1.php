<?php

$pessoas = array();
//manipulação de arrays
array_push($pessoas, array(
    'nome' => 'joao',
    'idade' => 20
));
array_push($pessoas, array(
    'nome' => 'glaucio',
    'idade' => 25
));

echo json_encode($pessoas);
