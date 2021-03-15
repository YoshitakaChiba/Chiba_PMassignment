<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>おみくじ</title>
    <link rel ="stylesheet" href="css/styles.css">
</head>
<body>
    <div id="btn">?</div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src = 'js/main.js?data=02'></script>


<?php

$s=new PDO("mysql:host=localhost;dbname=db1","root", "root");

$re=$s->query("SELECT * FROM tb_omi ORDER BY No DESC");
while($kekka=$re->fetch()){
    print "No.";
    print $kekka[0];
    print "     : ";
    print $kekka[1];
    print "     : ";
    print $kekka[2];
    print "<br>";
}
?>
    
</body>
</html>