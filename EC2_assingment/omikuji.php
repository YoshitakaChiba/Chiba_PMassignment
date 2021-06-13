<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>おおtttみくじです！</title>
    <link rel ="stylesheet" href="css/styles.css">
</head>
<body>
    <div id="btn">?</div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src = 'js/main.js?data=02'></script>



    <table border="1" id="targetTable">
      <thead>
        <tr>
          <td>NNNNo.</td>
          <td>onegaiみくじ結果</td>
          <td>時間</td>
        </tr>
      </thead>

      <?php
      $s=new PDO("mysql:host=localhost;dbname=db1","root", "Yo1_brz0");
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
