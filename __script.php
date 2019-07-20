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
        <script type="text/javascript" src="plugin/arrow/dist/js/jquery.smartWizard.min.js"></script>
    <script>
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
    </script>    
            
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