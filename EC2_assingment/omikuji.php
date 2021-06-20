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



    <table border="1" id="targetTable">
      <thead>
        <tr>
          <td>NNNo.</td>
          <td>おみくじ結果</td>
          <td>時間</td>
        </tr>
      </thead>

      <?php
      $s=new PDO("mysql:host=database-1.c64af0vgcsyg.ap-northeast-1.rds.amazonaws.com;dbname=DB1_PM","admin", "Elatico10");
      $re=$s->query("SELECT * FROM tb_omi ORDER BY No DESC");

      while($kekka=$re->fetch()){
            print '<tr>';
            print '<td>' . $kekka[0] . '</td>';
            print '<td>' . $kekka[1] . '</td>';
            print '<td>' . $kekka[2] . '</td>';
            print '</tr>';
        }
      ?>
    </table>
    
</body>
</html>
