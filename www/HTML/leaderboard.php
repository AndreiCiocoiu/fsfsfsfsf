<?php
include('common.php') ;
//outputs the header//
outputHeader("Leadearboard");
//outputs the logo of the page//
logo();
//outputs the navigation of the page//
Navigationoutput("Leaderboard");
//outputs the footer//
footer();
?>
<!--container that contains the leaderboard where users can check their ranking-->
<div class="main-container">
  <div class="Welcome">
    <h2>Leaderboard</h2>
  </div>
</div>
<div class="lb-container">
  <table class="table">
    <tr>
      <th>Nickname</th>
      <th>Ranking</th>
      <th>Points</th>
    </tr>
    <tr>
      <td>Andrei</td>
      <td>1</td>
      <td>50</td>
    </tr>
    <tr>
      <td>Adina</td>
      <td>2</td>
      <td>40</td>
    </tr>
    <tr>
      <td>Luci</td>
      <td>3</td>
      <td>30</td>
    </tr>
  </table>
</div>