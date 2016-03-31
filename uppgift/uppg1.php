<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Uppgift 1</title>
</head>
<body>
  <form method="post" action="uppg1.php">
    <input type="text" name="text" /><br />
    <input type="submit" name="submit"/><br />
  </form>
<?php


if(isset($_POST['submit'])){
  $glenn = $_POST['text'];

for($h = $glenn;$h >=1;$h--){
    echo 'REPOST';
    echo '<br>';
  }
for($x = 0;$x <= $glenn; $x++){
  echo 'REPOST';


  for($i = 1;$i <= $glenn ;$i++){
    echo 'REPOST';
}
  echo '<br>';
  }





}
 ?>
</body>
</html>
