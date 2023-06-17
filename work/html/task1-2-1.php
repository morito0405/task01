<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $tax= '現在、消費税は10%です。';
  ?>
  <?php
  $pencil='鉛筆が100円で税込110円です。';
  ?>
  <?php
  $eraser='消しゴムが200円で税込220円です。';
  ?>

  <?= $tax;
  ?>
  <br>
  <br>
  <?= $pencil;
  ?>
  <br>
  <br>
  <?= $eraser;
  ?>

</body>
</html>