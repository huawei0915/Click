<?php include __DIR__ . '/__html_head.php' ?>
<style>
html,body{
    background-color: #1C1C1C;
    height: auto;
}
footer{
    width: 100%;
    height: 130px;
    background-color: #444;
    position:absolute;
    bottom: 0;
    text-align: left;
}
</style>
<?php include __DIR__ . '/__nav.php' ?>
<div class="form">
  <div class="login left flex-box">
    <h1>Login</h1>
    <input type="text" placeholder="Username">
    <input type="password" placeholder="Password">
    <div class="forget">Forget password?</div>
    <button class="mem_btn button-animate">Login</button>
  </div>
  <div class="create-account left flex-box">
    <h1>Sign up</h1>
    <input type="email" placeholder="Email">
    <input type="text" placeholder="Username">
    <input type="password" placeholder="Password">
    <button class="mem_btn button-animate">Sign up</button>
  </div>
  <div class="outer">
    <div class="inner flex-box">
      <div class="sign-in overlay-form flex-box">
        <h1>Welcome back</h1>
        <p>Hellow its a pleasure to see you again , click below to log in again</p>
        <button class="mem_btn" id="signIn">Sign in</button>
      </div>
      <div class="sign-up overlay-form flex-box">
        <h1>Hi there</h1>
        <p>want to join us ? press the below button to sign up with us</p>
        <button class="mem_btn" id="signUp">Sign up</button>
      </div>
    </div>
  </div>
</div>

<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>