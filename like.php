<?php
$index = $_POST['index'];
$data_like = file_get_contents('data/data_like.txt');
$likes = json_decode($data_like, true);
$likes[$index] = isset($likes[$index]) ? $likes[$index] + 1 : 1;
file_put_contents('data/data_like.txt', json_encode($likes));
echo $likes[$index];
?>