<!DOCTYPE html>
<html>
  <head>
    <title>Guessing Game</title>
    <style type="text/css">
      .game{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
      }
      
      </style>
      </head>
      <body>
        <div class="game">
<?php
$rand = rand(1,10);
$guess = $_POST['guess'];
$submit = $_POST['submit'];

if(isset($submit)){
if($guess == NULL){
  header("location: index.php");
  exit();
}else{
if($guess !=$rand){
  echo " You lose, the correct answer is " . $rand. "<br/><a href='index.php'> Try Again </a>";
} else {
  echo " You Won :) <br/><a href='index.php'> Try Again ? ;)</a>";
  }
}

} else {
  header("location: index.php");
  exit();
}
?>

        </div>
      </body>
</html>
