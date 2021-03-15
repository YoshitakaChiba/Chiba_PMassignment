<?php

$s=new PDO("mysql:host=localhost;dbname=db1","root", "root");
$result_d = $_POST['result'];//omiresultのカラムを入れる

$s->query("INSERT INTO tb_omi (omiresult, time) VALUES ('$result_d', now())");
// $re=$s->query("SELECT * FROM tb_omi ORDER BY No");
//     $re=$s->query("SHOW TABLES");
// while($kekka=$re->fetch()){
//     print $kekka[0];
//     print ";";
//     print $kekka[1];
//     print ";";
//     print $kekka[2];
//     print "<br>";
// }
// print "<br><a href='omikuji.html'>おみくじに戻る</a>";
?>
