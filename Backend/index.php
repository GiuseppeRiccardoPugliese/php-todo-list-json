<?php
//CORS Policy
header("Content-Type: application/json");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Origin: http://localhost:5173");
$todo = [
    [
        'compito' => 'Fare la presentazione per la riunione',
        'done' => true,
    ],
    [
        'compito' => 'Rispondere alle email dei clienti',
        'done' => false,
    ],
    [
        'compito' => 'Aggiornare il report settimanale',
        'done' => true,
    ],
];

$jsonTodoList = json_encode($todo);
file_put_contents("todos.json", $jsonTodoList);
//Trasformo il mio array associativo in un array di obj che puo' essere letto da JS
echo json_encode($todo);
