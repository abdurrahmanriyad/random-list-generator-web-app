<?php
$list = [
    0 => 'Abdur Rahman',
    1 => 'Habib',
    2 => 'Md Suza',
    3 => 'Riyad Uddin',
    4 => 'Arif Hossain'
];

if(isset($_POST['action'])){
    shuffle($list);
}

header('Content-Type: application/json');
echo json_encode($list);
?>