<?php

$s=new PDO("mysql:host=localhost;dbname=db1","root", "Yo1_brz0");
$result_d = $_POST['result'];//omiresultのカラムを入れる

$s->query("INSERT INTO tb_omi (omiresult, time) VALUES ('$result_d', now())");

?>
