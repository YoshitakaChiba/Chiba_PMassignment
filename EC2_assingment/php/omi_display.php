<?php

try{
    $s = new PDO(
        "mysql:host=localhost;dbname=db1",
        "root",
         "Yo1_brz0",
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );

        $re=$s->query("SELECT * FROM tb_omi ORDER BY No DESC");
        $response = $re->fetchAll();//$reは単なる結果が入ったオブジェクトなので、わかりやすく配列で表示する
        echo json_encode($response);
}

catch (PDOException $e){
    echo $e->getMessage() . PHP_EOL;
    exit;
}
?>
