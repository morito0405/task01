<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $tax='10';//税率
  ?>
  <?php
  $pencil='100';//鉛筆の値段
  ?>
  <?php
  $eraser='200';//消しゴムの値段
  ?>
  <?="現在、消費税は{$tax}%です。";?>
  <br>
  <br>
  <?="鉛筆が{$pencil}円で税込".(($pencil)+($pencil*$tax/100))."円です。";?>
<br>
<br>
<?= "消しゴムが{$eraser}円で税込".($eraser+ ($eraser*$tax/100))."円です。";?>

</body>
</html>