<?php require __DIR__ .'/__html_head.php' ?>
<?php require __DIR__ .'/__nav.php' ?>

<div class="login-body">
<ul class="nav">
  <li onclick="showLogin()">登入</li>
  <li onclick="showSignup()">註冊</li>
  <li onclick="showForgotPassword()">忘記密碼</li>
  <li onclick="showSubscribe()">驗證</li>
  <li onclick="showContactUs()">連絡我們</li>
</ul>
<div class="wrapper">
  <div class="rec-prism">
    <div class="face face-top">
      <div class="content">
        <h2>驗證</h2>
        <small>請輸入您的E-Mail , 後續驗證碼將會寄送至你的電子信箱</small>
        <form onsubmit="event.preventDefault()">
          <div class="field-wrapper">
            <input type="text" name="email" placeholder="email">
            <label>e-mail</label>
          </div>
          <div class="field-wrapper">
            <input class="A-submit" type="submit" onclick="showThankYou()">
          </div>
        </form>
      </div>
    </div>
    <div class="face face-front">
      <div class="content">
        <h2>登入</h2>
        <form onsubmit="event.preventDefault()">
          <div class="field-wrapper">
            <input type="text" name="username" placeholder="username">
            <label>使用者名稱</label>
          </div>
          <div class="field-wrapper">
            <input type="password" name="password" placeholder="password" autocomplete="new-password">
            <label>密碼</label>
          </div>
          <div class="field-wrapper">
            <input class="A-submit" type="submit" onclick="showThankYou()">
          </div>
          <span class="psw" onclick="showForgotPassword()">忘記密碼?   </span>
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
            <input class="A-submit" type="submit" onclick="showThankYou()">
          </div>
        </form>
      </div>
    </div>
    <div class="face face-right">
      <div class="content">
        <h2>註冊</h2>
        <form onsubmit="event.preventDefault()">
          <div class="field-wrapper">
            <input type="text" name="email" placeholder="email">
            <label>e-mail</label>
          </div>
          <div class="field-wrapper">
            <input type="password" name="password" placeholder="password" autocomplete="new-password">
            <label>請輸入密碼</label>
          </div>
          <div class="field-wrapper">
            <input type="password" name="password2" placeholder="password" autocomplete="new-password">
            <label>再次輸入密碼</label>
          </div>
          <div class="field-wrapper">
            <input class="A-submit" type="submit" onclick="showThankYou()">
          </div>
          <span class="singin" onclick="showLogin()">已經是我們的會員 , 請前往登入</span>
        </form>
      </div>
    </div>
    <div class="face face-left">
      <div class="content">
        <h2>連絡我們</h2>
        <form onsubmit="event.preventDefault()">
          <div class="field-wrapper">
            <input type="text" name="name" placeholder="name">
            <label>姓名</label>
          </div>
          <div class="field-wrapper">
            <input type="text" name="email" placeholder="email">
            <label>e-mail</label>
          </div>
          <div class="field-wrapper">
            <textarea placeholder="your message"></textarea>
            <label>請留下您寶貴的意見與建議</label>
          </div>
          <div class="field-wrapper">
            <input class="A-submit" type="submit" onclick="showThankYou()">
          </div>
        </form>
      </div>
    </div>
    <div class="face face-bottom">
      <div class="content">
        <div class="thank-you-msg">
          Thank you!
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php require __DIR__ .'/__footer.php' ?>
<?php require __DIR__ .'/__script.php' ?>
<?php require __DIR__ .'/__html_end.php' ?>