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
    </style>
  </head>

  <body>
    <div class="header">
    <h1> Guessing Game ! <br/>- Play With Me -</h1>
    </div>
    <div class="guess">
      <form action="game.php" method="POST">
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
