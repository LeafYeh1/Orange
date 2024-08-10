<!DOCTYPE HTML>
<!--
    Ion by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Log_in_Orange</title>
    <link rel="icon" type="image/png" href="images/orange.png">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script><noscript>
        <link rel="stylesheet" href="css/skel.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-xlarge.css">
    </noscript>
</head>

<body id="top">

    <!-- Header -->
    <header id="header" class="skel-layers-fixed">
        <h1><a href="index.php" class="up">早安美吱澄</a></h1>
        <nav id="nav">
            <ul>
                <li><a href="index.php" class="up">首頁</a></li>
                <li><a href="course.php" class="up">課程評價</a></li>
                <!--<li><a href="right-sidebar.html" class="up">待思考</a></li>-->
                <li><a href="feedback_front.php" class="up">意見回饋</a></li>
                <?php
                // 在按钮的地方添加以下代码
                if (isset($_SESSION["login_session"]) && $_SESSION["login_session"] === true) {
                    // 用户已登录，显示头像和链接到 user.php
                    echo '<li><a href="users.php"><img src="images/orange.png" alt="User Avatar" style="width: 40px; height: 40px;"></a></li>';
                } else {
                    // 用户未登录，显示登录按钮
                    echo '<li><a href="login_front.php" class="button special">Login</a></li>';
                }
                ?>
            </ul>
        </nav>
        <style>
            #header nav>ul>li a.up {
                position: relative;
            }

            #header nav>ul>li a.up::after {
                content: '';
                position: absolute;
                left: 50%;
                bottom: 5px;
                /* 负值表示往上移动 */
                width: 0;
                height: 2px;
                background-color: #ced0d1;
                transition: width 0.3s ease-out, left 0.3s ease-out;
                /* 添加 left 的过渡效果 */
                transform-origin: center;
                /* 设置变换的原点为中心 */
            }

            #header nav>ul>li a.up:hover::after {
                width: 100%;
                /* 鼠标悬停时擴散直线的寬度 */
                left: 0;
                /* 鼠标悬停时调整 left 为 0，使线条从中心向两边扩展 */
            }

            #header nav>ul>li a.up:hover {
                color: #629DD1;
            }

            /*統計人數樣式*/
            #header nav>ul>li .count:hover::after {
                width: 0;
            }

            #header nav>ul>li .count:hover {
                color: #555f66;
            }

            /*Login樣式*/
            #header nav>ul>li a.button:hover::after {
                width: 0;
            }
        </style>
    </header><!-- Main -->
    <section id="main" class="wrapper style1" style="background-color: #efba47; color:white;">
        <header class="major">
        </header>
        <div class="leaf-container" style="background-color:white;">
            <img src="images/orange.png" width="350" height="350">
            <aside>
                <form method="post" action="login.php">
                    <label for="username"
                        style="font-size: 21px; font-weight: bold; width: 100%; margin-left: -10px; color: #8b4513;">帳號</label>
                    <input type="text" id="username" name="username"
                        style="margin-bottom: 20px; width: 100%; margin-left: -10px; color: black;" placeholder="你的帳號">
                    <label for="password"
                        style="font-size: 21px; font-weight: bold; width: 100%; margin-left: -10px; color: #8b4513;">密碼</label>
                    <input type="text" id="password" name="password"
                        style="margin-bottom: 30px; width: 100%; margin-left: -10px; color: black;" placeholder="你的密碼">
                    <input type="submit" name="submit-btn" value="    Log in"
                        style="margin-bottom: 2px; width: 100%; margin-left: -10px; background-color:#8b4513;">
                    <hr style="margin-top: 15px; margin-bottom: 15px;">
                    <input type="submit" name="google-submit" value="  google登入  "
                        style="margin-top: 2px;  width: 100%; margin-left: -10px; background-color:#8b4513;">
                </form>
            </aside>
        </div>



    </section><!-- Footer -->

    <!--leaf change-->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>©Copyright by 第14組</li>
        </ul>
    </footer>
    <!-- origin footer<footer id="footer"><div class="container">
                    <div class="row double">
                        <div class="6u">
                            <div class="row collapse-at-2">
                                <div class="6u">
                                    <h3>Accumsan</h3>
                                    <ul class="alt"><li><a href="#">Nascetur nunc varius</a></li>
                                        <li><a href="#">Vis faucibus sed tempor</a></li>
                                        <li><a href="#">Massa amet lobortis vel</a></li>
                                        <li><a href="#">Nascetur nunc varius</a></li>
                                    </ul></div>
                                <div class="6u">
                                    <h3>Faucibus</h3>
                                    <ul class="alt"><li><a href="#">Nascetur nunc varius</a></li>
                                        <li><a href="#">Vis faucibus sed tempor</a></li>
                                        <li><a href="#">Massa amet lobortis vel</a></li>
                                        <li><a href="#">Nascetur nunc varius</a></li>
                                    </ul></div>
                            </div>
                        </div>
                        <div class="6u">
                            <h2>Aliquam Interdum</h2>
                            <p>Blandit nunc tempor lobortis nunc non. Mi accumsan. Justo aliquet massa adipiscing cubilia eu accumsan id. Arcu accumsan faucibus vis ultricies adipiscing ornare ut. Mi accumsan justo aliquet.</p>
                            <ul class="icons"><li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                                <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                            </ul></div>
                    </div>
                </div>
            </footer><div class="copyright">
            ©Copyright by 第14組
        </div>-->
</body>

</html>