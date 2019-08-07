<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'login';

if (empty($_SERVER['HTTP_REFERER'])) {
  $backToUrl = './';
} else {
  $backToUrl = $_SERVER['HTTP_REFERER'];
}

?>


<?php require __DIR__ . '/__html_head.php' ?>
<style>
  .nav {
    display: flex;
    justify-content: center;
  }

  .nav li:nth-child(1) {
    margin-left: 0;
  }

  .nav li {
    font-size: 1rem;
  }
</style>
<?php require __DIR__ . '/__nav.php' ?>

<div class="login-body">
  <ul class="nav">
    <li onclick="showLogin()">登入</li>
    <li onclick="showSignup()">註冊</li>
    <!-- <li onclick="showForgotPassword()">忘記密碼</li> -->
    <!-- <li onclick="showSubscribe()">驗證</li> -->
    <!-- <li onclick="showContactUs()">連絡我們</li> -->
  </ul>
  <div class="wrapper">

    <div class="rec-prism">
      <div class="face face-left">
        <div class="content">
          <div class="fail-msg">
            登入失敗無此帳號!<br>
            <p></p>
            跳轉回登入頁面中
            <div class="spinner-grow text-secondary" role="status">
              <span class="sr-only">Loading...</span>
            </div>
          </div>
        </div>
      </div>
      <div class="face face-front">
        <div class="content">
          <h2>登入</h2>
          <form id="myform" method="post" onsubmit="return checkForm()">
            <div class="field-wrapper">
              <input type="text" name="email" id="email" placeholder="username">
              <label>使用者名稱</label>
            </div>
            <div class="field-wrapper">
              <input type="password" name="password" id="password" placeholder="password" autocomplete="new-password">
              <label>密碼</label>
            </div>
            <div class="field-wrapper">
              <input type="submit" value="登入">
            </div>
            <span class="psw" onclick="showForgotPassword()">忘記密碼? </span>
            <span class="signup" onclick="showSignup()">尚未成為我們的會員, 按此前往註冊</span>
          </form>
        </div>
      </div>
      <div class="face face-back">
        <div class="content">
          <h2>忘記密碼</h2>
          <small>請輸入您的E-Mail , 以便後續寄送重設密碼連結至您的電子信箱</small>
          <form onsubmit="event.preventDefault()">
            <div class="field-wrapper">
              <input type="text" name="email" placeholder="email">
              <label>e-mail</label>
            </div>
            <div class="field-wrapper">
              <input class="A-submit" type="submit" onclick="showThankYou()" value="送出">
            </div>
          </form>
        </div>
      </div>
      <div class="face face-right">
        <div class="content">
          <h2>註冊</h2>
          <form id="myform2" method="post" onsubmit="return checkForm2()">
            <div class="field-wrapper">
              <input type="text" name="email" id="email2" placeholder="email">
              <label>e-mail</label>
            </div>
            <div class="field-wrapper">
              <input type="text" name="nickname" id="nickname" placeholder="nickname">
              <label>暱稱</label>
            </div>
            <div class="field-wrapper">
              <input type="password" name="password" id="password2" placeholder="password" autocomplete="new-password">
              <label>請輸入密碼</label>
            </div>
            <div class="field-wrapper">
              <input type="password" name="password2" id="password2Check" placeholder="password" autocomplete="new-password">
              <label>再次輸入密碼</label>
            </div>
            <div class="field-wrapper">
              <input class="A-submit" type="submit" value="註冊">
            </div>
            <span class="singin" onclick="showLogin()">已經是我們的會員 , 請前往登入</span>
          </form>
        </div>
      </div>
      <div class="face face-top">
        <div class="content">
          <div class="thank-you-msg">
          註冊成功
          </div>
        </div>
      </div>
      <div class="face face-bottom">
        <div class="content">
          <div class="thank-you-msg">
            登入成功
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require __DIR__ . '/__footer.php' ?>
<?php require __DIR__ . '/__script.php' ?>


<?php require __DIR__ . '/__html_end.php' ?>