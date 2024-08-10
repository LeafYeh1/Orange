<?php
// 連線資料庫
$link = mysqli_connect("localhost", "id21704570_orange", "Orange7749.", "id21704570_orange");
// 檢查連線是否成功
if ($link->connect_error) {
    die("連線失敗: " . $link->connect_error);
}

// 確保 session 已啟動
session_start();

// 獲取登入的使用者名稱
if (isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])) {
    $name = $_SESSION['user_name'];

    // 查詢資料庫獲取使用者名稱
    $query = "SELECT Name FROM users WHERE name = '$name'";
    $result = mysqli_query($link, $query);

    // 獲取使用者名稱
    $userName = ($result && $row = mysqli_fetch_assoc($result)) ? $row['Name'] : '';
}

// 檢查表單是否提交
if (isset($_POST['submit-btn'])) {
    $course_name = mysqli_real_escape_string($link, $_POST['course_name']);
    $teacher = mysqli_real_escape_string($link, $_POST['teacher']);

    // 查詢資料庫獲取詳細資料
    $query = "SELECT * FROM course WHERE course_name = '$course_name' AND teacher = '$teacher'";
    $result = mysqli_query($link, $query);

    // 顯示課程詳細資料
    if ($result && $row = mysqli_fetch_assoc($result)) {
        $course_id = $row['course_id'];
        $course_credit = $row['course_credit'];
        $big_category = $row['big_category'];
        $small_category = $row['small_category'];
        $week = $row['week'];
        $section_class = $row['section_class'];
        $classroom = $row['classroom'];
        $campus = $row['campus'];
    }

    // 釋放結果集
    mysqli_free_result($result);
    // 輸出 JavaScript 以滾動回到表單
    echo '<script>window.location.hash = "myForm2";</script>';
}

// 關閉資料庫連線
mysqli_close($link);
?>
<!DOCTYPE HTML>
<!--
    Ion by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">

<head>
    <title>早安美吱城</title>
    <link rel="icon" type="image/png" href="images/orange.png">
    
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-xlarge.css">
    </noscript>
    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .spinner {
            width: 80px;
            height: 80px;
            animation: bounce 1s ease-in-out infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(10px);
            }

            40% {
                transform: translateY(-30px);
                /* 調整彈跳的高度，以符合您的需求 */
            }

            60% {
                transform: translateY(-15px);
                /* 調整彈跳的高度，以符合您的需求 */
            }
        }


        .loadinggif {
            margin-right: 10px;
            /* 調整圖片之間的距離，可根據需要調整 */
            width: 180px;
            /* 調整 GIF 寬度 */
            height: 100px;
            /* 調整 GIF 高度 */
        }

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

        .rating-container {
            display: flex;
            align-items: center;
        }

        .slider-container {
            width: 80%;
            margin-bottom: 20px;
        }

        .slider {
            width: 100%;
        }

        .label-container {
            display: flex;
            justify-content: space-between;
        }

        .rating-label {
            flex: 1;
        }

        .user-avatar {
            position: relative;
            display: inline-block;
        }

        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: -30px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .user-avatar:hover .dropdown {
            display: block;
        }
    </style>
</head>

<body id="top">
    <!--preloader-->
    <div id="preloader">
        <img src="images/orange.png" alt="Loading..." class="spinner">
        <img src="images/loading.gif" class="loadinggif">
    </div>

    <!-- Header -->
    <header id="header" class="skel-layers-fixed">
        <h1><a href="LOGindex.php" class="up">早安美吱澄</a></h1>
        <nav id="nav">
            <ul>
                <li><a href="LOGindex.php" class="up">首頁</a></li>
                <li><a href="LOGcourse.php" class="up">課程評價</a></li>
                <!--<li><a href="right-sidebar.html" class="up">待思考</a></li>-->
                <li><a href="LOGfeedback_front.php" class="up">意見回饋</a></li>
                <li class="user-avatar">
                    <a href="users.php"><img src="images/manage.png" alt="User Avatar"
                            style="width: 40px; height: 40px;"></a>
                    <ul class="dropdown">
                        <li><a href="login_front.php">Log out</a></li>
                        <li><a href="personal_profile.php">編輯</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <!--<h2> 首頁
        </h2>-->
            <h2>歡迎
                <?php echo $userName; ?> 登入
            </h2>
            <p>恭喜您成功登入早安美吱澄</p>
            <!--<p>A free responsive template by <a href="http://templated.co">TEMPLATED</a></p>-->

        </div>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style1">
        <header class="major">
            <h2>早 安 瑪 卡 巴 卡</h2>
            <p>以下為此網頁的會員功能，請細品</p>
        </header>
        <div class="container">
            <div class="row">
                <div class="4u">
                    <section class="special box">
                        <lord-icon
                            src="https://cdn.lordicon.com/xzalkbkz.json"
                            trigger="loop"
                            delay="2500"
                            style="width:160px;height:160px">
                        </lord-icon>
                        <h3>更改暱稱</h3>
                        <p>在登錄後可以使用更改暱稱功能，保證匿名的方式進行評價</p>
                    </section>

                </div>
                <div class="4u">
                    <section class="special box">
                        <lord-icon
                            src="https://cdn.lordicon.com/wzrwaorf.json"
                            trigger="loop"
                            delay="1500"
                            style="width:160px;height:160px">
                        </lord-icon>
                        <h3>評價課程</h3>
                        <p>可以在課程下面留言，或是想想你對這堂課的印象、課程涼度、老師好壞等在你心目中的分數，把它留在我們的評價系統上吧~</p>
                    </section>
                </div>
                <div class="4u">
                    <section class="special box">
                        <lord-icon
                            src="https://cdn.lordicon.com/unukghxb.json"
                            trigger="loop"
                            delay="2000"
                            style="width:160px;height:160px">
                        </lord-icon>
                        <h3>搜尋</h3>
                        <p>看到旁邊的資訊是否擔心你找不到你想找的課程? 沒關係，我們創造了一個搜尋系統，可以輸入關鍵字就可以找到你想找的課程囉~</p>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style2">
        <header class="major">
            <h2>課程上傳(大力稱讚 or 嚴厲譴責 )</h2>
            <p>快點來評價你的老師!!!</p>
        </header>
        <hr>
        <h4 style="text-align: center;" id="myForm">step 1</h4>
        <hr>
        <div class="container">
            <form method="post" action="">
                <div style="float: left; width: 47%;">
                    <label for="course_name">課程名稱</label>
                    <input type="text" id="course_name" name="course_name" placeholder="你的課程名稱">
                    <label for="teacher">授課老師</label>
                    <input type="text" id="teacher" name="teacher" placeholder="你的授課老師">
                    <input type="submit" name="submit-btn" value="查詢課程" class="button big special">

                </div>



                <div style="float: right; width: 47%;text-align: center; ">
                    <h2>課程詳細資料</h2><br>
                    <div style="<?php echo isset($course_name) ? '' : 'display: none;'; ?>">
                        <h3>課程名稱：
                            <?php echo $course_name; ?>
                        </h3>
                        <h3>老師：
                            <?php echo $teacher; ?>
                        </h3>
                        <h3>學分數：
                            <?php echo $course_credit; ?>
                        </h3>
                        <h3>校區：
                            <?php echo $campus; ?>
                        </h3>
                        <h3>星期：
                            <?php echo $week; ?>
                        </h3>
                        <h3> 第：
                            <?php echo $section_class; ?> 節
                        </h3>
                        <h3>教室：
                            <?php echo $classroom; ?>
                        </h3><br>
                    </div>
                </div>
                <div style="clear: both; text-align: center;">

                </div>
            </form>
            <br>
            <hr>
            <h4 style="text-align: center;" id="myForm2">step 2</h4>
            <hr>
            <form method="post" action="evaluation.php">
                <div style="<?php echo isset($course_name) ? '' : 'display: none;'; ?>">
                    <h3>課程代碼：
                        <?php echo $course_id; ?>
                    </h3>
                    <h3>課程名稱：
                        <?php echo $course_name; ?>
                    </h3>
                    <h3>老師：
                        <?php echo $teacher; ?>
                    </h3>
                </div>
                <div style="float: left; width: 47%;">
                    <div class="rating-container">
                        <div class="slider-container">
                            <div class="label-container">
                                <label class="rating-label">最低</label>
                                <h3 class="rating-label">整體評價</h3>
                                <label class="rating-label">最高</label>
                            </div>
                            <input type="range" id="overall_rating" name="all_evaluation" min="1" max="5" value="3"
                                class="slider">
                        </div>
                    </div>

                    <div class="rating-container">
                        <div class="slider-container">
                            <div class="label-container">
                                <label class="rating-label">最低</label>
                                <h3 class="rating-label">給分甜度</h3>
                                <label class="rating-label">最高</label>
                            </div>
                            <input type="range" id="overall_rating" name="credit_sweet" min="1" max="5" value="3"
                                class="slider">
                        </div>
                    </div>

                    <div class="rating-container">
                        <div class="slider-container">
                            <div class="label-container">
                                <label class="rating-label">最低</label>
                                <h3 class="rating-label">含金量</h3>
                                <label class="rating-label">最高</label>
                            </div>
                            <input type="range" id="overall_rating" name="learning" min="1" max="5" value="3"
                                class="slider">
                        </div>
                    </div>

                    <div class="rating-container">
                        <div class="slider-container">
                            <div class="label-container">
                                <label class="rating-label">最低</label>
                                <h3 class="rating-label">老師78程度</h3>
                                <label class="rating-label">最高</label>
                            </div>
                            <input type="range" id="overall_rating" name="evilking_level" min="1" max="5" value="3"
                                class="slider">
                        </div>
                    </div>
                </div>

                <div style="float: right; width: 47%;">
                    <label for="course_content">課程心得</label>
                    <textarea id="content" name="content" rows="4" cols="60" placeholder="你的課程內容"></textarea>
                </div>
                <!-- 在第二個表單中要得匯入資料庫 不可以動 -->
                <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
                <input type="hidden" name="course_name" value="<?php echo $course_name; ?>">
                <input type="hidden" name="teacher" value="<?php echo $teacher; ?>">
                <input type="hidden" name="big_category" value="<?php echo $big_category; ?>">
                <input type="hidden" name="small_category" value="<?php echo $small_category; ?>">
                <div style="clear: both; text-align: center;">
                    <input type="submit" name="submit-btn" value="課程上傳" class="button big special">
                </div>
            </form>

        </div>
    </section>

    <!-- Three 
<section id="three" class="wrapper style1">
    <div class="container">
        <div class="row">
            <div class="8u">
                <section>
                    <h2>Mollis ut adipiscing</h2>
                    <a href="#" class="image fit"><img src="images/pic03.jpg" alt="" width="818" height="340"></a>
                    <p>Vis accumsan feugiat adipiscing nisl amet adipiscing accumsan blandit accumsan sapien blandit ac amet faucibus aliquet placerat commodo. Interdum ante aliquet commodo accumsan vis phasellus adipiscing. Ornare a in lacinia. Vestibulum accumsan ac metus massa tempor. Accumsan in lacinia ornare massa amet. Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan commodo odio cubilia ac eu interdum placerat placerat arcu commodo lobortis adipiscing semper ornare pellentesque.</p>
                </section>
            </div>
            <div class="4u">
                <section>
                    <h3>Magna massa blandit</h3>
                    <p>Feugiat amet accumsan ante aliquet feugiat accumsan. Ante blandit accumsan eu amet tortor non lorem felis semper. Interdum adipiscing orci feugiat penatibus adipiscing col cubilia lorem ipsum dolor sit amet feugiat consequat.</p>
                    <ul class="actions">
                        <li><a href="#" class="button alt">Learn More</a></li>
                    </ul>
                </section>
                <hr>
                <section>
                    <h3>Ante sed commodo</h3>
                    <ul class="alt">
                        <li><a href="#">Erat blandit risus vis adipiscing</a></li>
                        <li><a href="#">Tempus ultricies faucibus amet</a></li>
                        <li><a href="#">Arcu commodo non adipiscing quis</a></li>
                        <li><a href="#">Accumsan vis lacinia semper</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</section>-->

    <!--preloader-->
    <script>

        document.addEventListener("DOMContentLoaded", function () {
            // 延遲 1 秒 (1000 毫秒)
            setTimeout(function () {
                // 延遲後隱藏 preloader
                var preloader = document.getElementById("preloader");
                preloader.style.display = "none";
            }, 1000);
        });


    </script>

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>© Copyright by 第14組</li>
        </ul>
    </footer>

</body>

</html>