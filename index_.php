<?php include __DIR__ . '/__html_head.php' ?>
<body>
<header>
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="logo"><a href=""><img src="img/logo.svg"alt=""></a></div>
                <div class="features pb-2">
                        <form method="post" action="">
                        <div class="serbox">
                               
                                <input id="mag" type="search" placeholder="    Search..." name="search">
                             
                                <div id="arm"></div>
                            </form>
                    <!-- <input type="search" id="searcharea" name="searcharea" class="searcharea" value="搜尋"> -->
                    <!-- <input type="search"><img src="img/icon/放大鏡.svg" alt="" class="px-2" id="search"></a> -->
                    <a href=""><img src="img/icon/shop.svg" alt="" class="px-3 ml-2" style="height: 28px;margin-top: 5px;"></a>
                    <a href=""><img src="img/icon/會員.svg" alt="" class="px-2"></a>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <div class="container">
            <div class="d-flex justify-content-between">
                <ul class="d-flex nav-l">
                    <li><a href="" >首頁</a></li>
                    <li><a href="" >CANON</a></li>
                    <li><a href="" >NIKON</a></li>
                    <li><a href="" style="letter-spacing:1px;">LEICA</a></li>
                    <li><a href="" >產品列表</a></li>
                    <li><a href="" >首選推薦</a></li>
                    <li><a href="" >攝影分享</a></li>
                </ul>
                <ul class="d-flex nav-r">
                    <li><a href="">關於我們</a></li>
                    <li><a href="">客服支援</a></li>
                    <!-- <li><a href="">FAQ</a></li> -->
                </ul>
            </div>
        </div>
    </nav>


    <div class="accordion d-flex p-0 my-3" id="accordion">
        <a class="d-block p-3 active">
            jQuery
        </a>
        <div class="content active">
            <p class="p-3">
            jQuery is a cross-platform JavaScript library designed to simplify the client-side scripting of HTML. It is free, open-source software using the permissive MIT License. Web analysis indicates that it is the most widely deployed JavaScript library by a large margin.
            </p>
        </div>
        <a class="d-block p-3">
            CSS
        </a>
        <div class="content">
            <p class="p-3">
                Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language like HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.
            </p>
        </div>
        <a class="d-block p-3">
            HTML
        </a>
        <div class="content">
            <p class="p-3">
                Hypertext Markup Language (HTML) is the standard markup language for creating web pages and web applications. With Cascading Style Sheets (CSS) and JavaScript, it forms a triad of cornerstone technologies for the World Wide Web.
            </p>
        </div>
        <a class="d-block p-3">
            PHP
        </a>
        <div class="content">
            <p class="p-3">
                PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive acronym PHP: Hypertext Preprocessor.
            </p>
        </div>
    </div>



<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>