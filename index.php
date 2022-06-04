<!DOCTYPE html>
<html>
  <head>
    <title>Guessing Game</title>
    <style type="text/css">
      .header {
        position: absolute;
        left: 50%;
        top: 44%;
        transform: translate(-50%, -44%);
        -webkit-transform: translate(-50%, -44%);
      }

      .guess {
        position: absolute;
        left: 50%;
        top: 56%;
        transform: translate(-50%, -44%);
        -webkit-transform: translate(-50%, -44%)
      } 
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
    <div class="header">
    <h1> Guessing Game ! <br/>- Play With Me -</h1>
    </div>
    <div class="guess">
      <form action="index.php" method="POST">
        <input
          type="number"
          name="guess"
          min="1"
          max="10"
          style="width: 220px";
          placeholder="Guess The Number Lasha (1-10)"
        /><br /><br />

        <input type="submit" name="submit" style="position: absolute; left: 35%;" value="Guess"/>
      </form>
    </div>
  </body>
</html>
