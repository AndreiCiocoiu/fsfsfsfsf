<?php
include('common.php') ;
//outputs the header//
outputHeader("Instructions");
//outputs the logo//
logo();
//outputs the navigation//
Navigationoutput("Instructions");

footer();
?>
<div class="main-container">
  <div class="Welcome">
    <h2>Instructions</h2>
  </div>
</div>
<!--Container class that contains information on how to play the game-->
<div class="It-container">
  <h1 id="heading1">Instructions</h1>
  <p>Tic Tac Toe is a game where two players take turns in drawing either an "O" or an "X"
    in one square of a grid consiting of nine squares.
  </p>
  <h2 id="heading2">Points</h2>
  <p>Every time the rounds ends the winner will be awarded 300 points and the loser will will be awarded 0 points.
    If there will be a draw both players will be awarded 150 points.
  </p>
</div>