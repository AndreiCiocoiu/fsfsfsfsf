<?php
function outputHeader($title){
  echo '<!DOCTYPE html>';
  echo '<html>';
  echo '<head>';
  echo '<title>' . $title . '</title>';
  echo '<!-- Link to external style sheet -->';
  echo '<link rel="stylesheet" type="text/css" href="../CSS/style.css">';
  echo '</head>';
  echo '<body>';
}
//Function that display the logo for every page//
function logo(){
 echo '<h1 class="Logo">
Tic-Tac
</h1>' ;
}

function Navigationoutput($pageName){
  
  //Array of pages to link to
  $linkNames = array("Home", "Game", "Register", "Instructions" , "Leaderboard");
  $linkAddresses = array("index.php", "Gamepahe.php", "register2.php", "Instructions.php" , "Leaderboard.php");
  
  //Output navigation
  for($x = 0; $x < count($linkNames); $x++){
      echo '<a ';
      if($linkNames[$x] == $pageName){
          echo 'class="selected" ';
      }
      echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';
  }
  echo '</div>';
}

function footer(){
echo'<div class="footer" id="footer1">
<div class="contact">
    <h3>Tic Tac</h3>
    <p>Tic tac is a website created by Andrei Ciocoiu where people can play Tic tac toe<br>
        earn points and check their ranking for weekly prices.
    </p> 
</div>' ;
}