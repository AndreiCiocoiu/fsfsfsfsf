<?php
include('common.php') ;
//outputs the header//
outputHeader("Register Page");
//outputs the logo//
logo();
//outputs the navigation bar//
Navigationoutput("Register");
//outputs the footer//
footer();
?>
<!-- Container that contains register box where users can register and login box where they introduce
their details to login on the website-->
<div class="main-container">
  <div class="Welcome">
    <h2>Register/Login</h2>
  </div>
  <div class="randomclass">
    <div class="register-box">
      <div class="form">
        <h2>Register</h2>
        <div class="box-input">
          <input type="text" value="Nickname" id="email" required="required">
        </div>
        <div class="box-input">
          <input type="text" value="Email" id="email" required="required">
        </div>
        <div class="box-input">
          <input type="text" value="Password" id="password" required="required">
        </div>
        <input type="Submit" id="register-button" value="Register">
      </div>
      <div class="form">
        <h2>Login</h2>
        <div class="box-input">
          <input type="text" value="Email" id="email" required="required">
        </div>
        <div class="box-input">
          <input type="text" value="Password" id="password" required="required">
        </div>
        <input type="Submit" id="register-button" value="Login">
      </div>
    </div>
  </div>
</div>