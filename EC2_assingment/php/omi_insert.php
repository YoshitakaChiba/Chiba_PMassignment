<?php

$s=new PDO("mysql:host=database-1.c64af0vgcsyg.ap-northeast-1.rds.amazonaws.com;dbname=DB1_PM","admin", "Elatico10");
$result_d = $_POST['result'];//omiresultのカラムを入れる

$s->query("INSERT INTO tb_omi (omiresult, time) VALUES ('$result_d', now())");

?>
