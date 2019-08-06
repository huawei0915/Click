  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <!-- <script>
        var form = document.querySelector(".form");
        var signIn = document.getElementById("signIn");
        var signUp = document.getElementById("signUp");

        signUp.addEventListener("click", function() {
            form.classList.add("translate");
        });
        signIn.addEventListener("click", function() {
            form.classList.remove("translate");
        });
//登入切換動畫
    </script>     -->
            
      <script>
   $(".menu").click(function(){
          $(this).toggleClass('active');
        });

        var lastscrollTop;
        $(window).scroll(function () {
            let scrollTop = $(this).scrollTop();
            let scrollPage = $("body").height();
            if (scrollTop > lastscrollTop) {
                $("nav,header").addClass("active");
            } else {
                $("nav,header").removeClass("active");
            }
            lastscrollTop = scrollTop;
        });
//選單出現
    
  </script>
    <script>
      let prism = document.querySelector(".rec-prism");

      function showSignup(){
        prism.style.transform = "translateZ(-100px) rotateY( -90deg)";
      }
      function showLogin(){
        prism.style.transform = "translateZ(-100px)";
      }
      function showForgotPassword(){
        prism.style.transform = "translateZ(-100px) rotateY( -180deg)";
      }

      function showSubscribe(){
        prism.style.transform = "translateZ(-100px) rotateX( -90deg)";
      }

      function showContactUs(){
        prism.style.transform = "translateZ(-100px) rotateY( 90deg)";
      }

      function showThankYou(){
        prism.style.transform = "translateZ(-100px) rotateX( 90deg)";
      }



          
  </script>
  <script>
    var $email2 = $('#email2');
    var $password2 = $('#password2');
    var $password2_check = $('#password2Check');
    var fields2 = [$email2, $password2, $password2_check];

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    function checkForm2() {
        // 先回復到原來的狀態
        fields2.forEach(function(val){
            val.next().text('');
        });
        // alertInfo.hide();
        // submitBtn.hide();

        var isPass = true; // 表單是否有通過檢查

        if(! validateEmail($email2.val())) {
            isPass = false;
            $email2.next().text('請輸入正確的 Email 格式').css("color","red");
        }

        if($password2.val().length < 6) {
            isPass = false;
            $password2.next().text('請輸入六個以上的字元').css("color","red");
        }

        if($password2.val() !== $password2_check.val()) {
            isPass = false;
            $password2_check.next().text('密碼和密碼確認欄裡的值不同').css("color","red");
        }


        if(isPass){

            $.post('register_api.php', $('#myform2').serialize(), function(data){
                console.log(data);

                // alert(data.info);
           

                if(data.success){
                    //location.href = 'data_list.php';
                    // alertInfo.removeClass('alert-danger');
                    // alertInfo.addClass('alert-success');
                    showSubscribe();
                    setTimeout(function (){
                        location.href = backToUrl;
                        // location.href = "product-list.php";
                    }, 1000);
                } else {
                    alertInfo.removeClass('alert-success');
                    alertInfo.addClass('alert-danger');
                    // submitBtn.show();
                }
                alertInfo.text(data.info);
                alertInfo.show();

            }, 'json');
        }
        return false;
    }
</script>



<script>

    var $email = $('#email');
    var $password = $('#password');

    var fields = [$email, $password];

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    function checkForm() {
        // 先回復到原來的狀態
        fields.forEach(function(val){
            val.next().text('');
        });
        // alertInfo.hide();
        // submitBtn.hide();

        var isPass = true; // 表單是否有通過檢查

        if(! validateEmail($email.val())) {
            isPass = false;
            $email.next().text('請輸入正確的 Email 格式').css("color","red");
        }

        if($password.val().length < 6) {
            isPass = false;
            $password.next().text('請輸入六個以上的字元').css("color","red");
        }

        if(isPass){

            $.post('login_api.php', $('#myform').serialize(), function(data){
                console.log(data);
                // alert(data.info);
                if(data.success){
                    //location.href = 'data_list.php';
                    // alertInfo.removeClass('alert-danger');
                    // alertInfo.addClass('alert-success');
                    showThankYou();
                    setTimeout(function (){
                      // location.href = history.back();
                      // location.href = backToUrl;
                      location.href = "product-list.php";
                    }, 1000);
                } else {
                    // alertInfo.removeClass('alert-success');
                    // alertInfo.addClass('alert-danger');
                    // submitBtn.show();
                    // alert("帳號或密碼錯誤");
                    showContactUs();
                    setTimeout(function (){
                      location.href = "A_login.php";
                    }, 3000);
                }
                // alertInfo.text(data.info);
                // alertInfo.show();

            }, 'json');
        }
        return false;
    }

            $("#mag").keypress(function(event){
                if(event.keyCode==13)$("#search_form").submit();
            });



</script>