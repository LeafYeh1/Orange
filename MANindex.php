<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
--><html><head><title>首頁</title><link rel="icon" type="image/png" href="images/orange.png"><meta http-equiv="content-type" content="text/html; charset=utf-8"><meta name="description" content=""><meta name="keywords" content=""><meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"><!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]--><script src="js/jquery.min.js"></script><script src="js/skel.min.js"></script><script src="js/skel-layers.min.js"></script><script src="js/init.js"></script><noscript>
			<link rel="stylesheet" href="css/skel.css"><link rel="stylesheet" href="css/style.css"><link rel="stylesheet" href="css/style-xlarge.css"></noscript></head><body id="top">
			    
			      <!-- Header -->
<header id="header" class="skel-layers-fixed"><h1><a href="MANindex.php" class="up">早安美吱澄</a></h1>
                    <nav id="nav">
                        <ul>
                            <li><a href="MANindex.php" class="up">首頁</a></li>
                            <li><a href="MANcourse.php" class="up">課程評價</a></li>
                            <!--<li><a href="right-sidebar.html" class="up">待思考</a></li>-->
                            <li><a href="MANfeedback_front.php" class="up">意見回饋</a></li>
                            <li class="user-avatar">
                            <a href="manage.php"><img src="images/manage.png" alt="User Avatar" style="width: 40px; height: 40px;"></a>
                            <ul class="dropdown">
                            <li><a href="login_front.php">Log out</a></li>
                            </ul>
                            </li>
                
                        </ul>
                    </nav>
				<style>
				    #header nav > ul > li a.up {
						position: relative;
					}
					
					#header nav > ul > li a.up::after {
						content: '';
						position: absolute;
						left: 50%;
						bottom: 5px; /* 负值表示往上移动 */
						width: 0;
						height: 2px;
						background-color: #ced0d1;
						transition: width 0.3s ease-out, left 0.3s ease-out; /* 添加 left 的过渡效果 */
						transform-origin: center; /* 设置变换的原点为中心 */
					}
					
					#header nav > ul > li a.up:hover::after {
						width: 100%; /* 鼠标悬停时擴散直线的寬度 */
						left: 0; /* 鼠标悬停时调整 left 为 0，使线条从中心向两边扩展 */
					}
					#header nav > ul > li a.up:hover{
						color: #629DD1;
					}
					/*統計人數樣式*/
					#header nav > ul > li .count:hover::after{
						width: 0;
					}	
					#header nav > ul > li .count:hover{
						color: #555f66;
					}	
					/*Login樣式*/
					#header nav > ul > li a.button:hover::after{
						width: 0;
					}	
					/*Login樣式*/
					#header nav > ul > li a.button.special:hover{
						color: #629DD1;
					}	
					/* 在 section 中应用样式 */
					#searchInput {
						background-color: #ffffff;
						padding: 20px;
						margin: 50px;
						width: 300px; /* 设置宽度 */
						height: 35px; /* 可以根据需要修改高度值 */
						border: 5px solid #c4f0cb; /* 设置边框为2px的实线，颜色为#333 */
						border-radius: 15px; /* 添加圆角，数值可以根据需要调整 */
						margin: auto; /* 使元素水平居中 */
						margin-left: 200px;
					}
					#search{
						background-color: #c9ecf7;
						border-radius: 15px; /* 添加圆角，数值可以根据需要调整 */
						margin: auto; /* 使元素水平居中 */
						width: 60px; /* 设置宽度 */
						height: 45px; /* 可以根据需要修改高度值 */
						font-size: 16px;
						border: 5px;
					}
					#search:hover {
						color: #629DD1;
					}
					#class {
						list-style-type: none;
						padding: 0;
						margin: 0;
						margin-left: 25px; /* 根据需要调整缩进距离 */
					}
					header.major {
                        margin-top: -50px; /* 负的上边距值，可以根据需要调整 */
                    }
               
                    .coursecontainer {
                        background-color: #ccc; /* 背景颜色 */
                        padding: 15px;/* 在内容和边框之间添加 20px 的内边距，你可以根据需要调整这个值 */
                        border-radius: 8px; /* 圆弧形边框 */
                    }
                    /* PHP Evaluation Block Styles */
                    .coursecontainer > div > div {
                        width: 390px;
                        height: 260px;
                        box-sizing: border-box;
                        border: 1px solid #ccc;
                        padding: 20px;
                        margin-bottom: 20px;
                        display: inline-block;
                        vertical-align: top;
                        background-color: #666; /* 灰色背景 */
                        color: #fff; /* 文字白色 */
                        border-radius: 15px; /* 圆弧形边框 */
                        position: relative; /* 使子元素相对于父元素进行定位 */
                    }
                   
                    .coursecontainer > div > div p strong {
                        color: #ffad33; /* 文字颜色，亮橙色 */
                    }
                   
                    .coursecontainer > div > div .pfont {
                        font-size: 18px; /* 請根據需要調整字體大小的像素值 */
                    }
            
               
                    .coursecontainer > div > div:last-child {
                        margin-right: 0;
                    }
               
                    /* PHP Evaluation Content Styles */
                    .coursecontainer > div > div p {
                        margin: 5px 0;
                    }
               
                    /* PHP Evaluation Star Rating Styles */
                    .coursecontainer > div > div img {
                        width: 200px;
                        height: 50px;
                        margin-right: 5px;
                    }
               
                    /* 新增樣式 */
                    .coursecontainer > div > div .additional-style {
                        color: red;
                        font-weight: bold;
                    }
               
                    /* 新增樣式 - Learn More 按鈕 */
                    .coursecontainer > div > div .show-full-content,
                    .coursecontainer > div > div .show-partial-content {
                        background-color: #c7a4ff; /* Learn More 按钮背景颜色，亮橙色 */
                        color: #555; /* Learn More 按钮文字颜色 */
                        padding: 8px 16px; /* Learn More 按钮内边距 */
                        border: 2px solid #555; /* Learn More 按钮边框 */
                        border-radius: 5px; /* Learn More 按钮圆角边框 */
                        cursor: pointer;
                        transition: background-color 0.3s, color 0.3s;
                        position: absolute; /* Learn More 按钮绝对定位 */
                        bottom: 15px; /* Learn More 按钮距离底部 15px */
                        left: 18px; /* Learn More 按钮距离左侧 18px */
                    }
               
                    .coursecontainer > div > div .show-full-content:hover,
                    .coursecontainer > div > div .show-partial-content:hover {
                        background-color: #9c7cf2; /* 鼠标悬停时的背景颜色 */
                        color: #ffffff; /* 鼠标悬停时的文字颜色 */
                    }
               
                    .coursecontainer > div > div .show-full-content:hover,
                    .coursecontainer > div > div .show-partial-content:hover {
                        background-color: #555; /* 鼠标悬停时的背景颜色 */
                        color: #fff; /* 鼠标悬停时的文字颜色 */
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
			</header>
			<!-- Banner --><section id="banner"><div class="inner">
			<h2>課程評價系統</h2>
			<p style="font-size: 30px">NCYU<a href=""></a></p>
			<!--<ul class="actions"><li><a href="login_front.php" class="button big special">Sign Up</a></li>-->
				<!--<li><a href="#elements" class="button big alt">Learn More</a></li>-->
			</ul></div>
			</section>

			<!-- Main -->
			<section id="main" class="wrapper style1"><h1 style="text-align: center; font-size: 42px;">歡迎使用嘉義大學課程評價系統!</h1>
				<p></p>
				<div class="container">
				    <div>
                        <!--這邊是課程評價結果-->
                        <?php
                        $link = mysqli_connect("localhost", "id21704570_orange", "Orange7749.", "id21704570_orange");
        
                        if ($link->connect_error) {
                            die("連接數據庫失敗: " . $link->connect_error);
                        }
        
                        $sql = "SELECT * FROM evaluation ORDER BY RAND() LIMIT 5";
                        $result = $link->query($sql);
        
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="evaluation-block" >';
        
                                //echo "<p><strong>Course ID:</strong> " . $row['course_id'] . "</p>";
                                //echo "<p><strong>Big Category:</strong> " . $row['big_category'] . "</p>";
                                echo "<p class = 'scroll'><strong>課程類別 :</strong> <span class='pfont'>" . $row['small_category'] . "</p>";
                                echo "<p><strong>課程名稱 :</strong> <span class='pfont'>" . $row['course_name'] . "</span></p>";
                                echo "<p><strong>老師 :</strong> <span class='pfont'>" . $row['teacher'] . "</span></p>";
        
                                echo '<div class="full-content" style="display: none;">';
                                echo "<p><strong>Thoughts:</strong> " . $row['thoughts'] . "</p>";
        
                                echo "<p><strong>整體評價:</strong> </p>";
                                if ($row['all_evaluation'] == 1) {
                                    echo "<img src='images/one_star.png'>";
                                } else if ($row['all_evaluation'] == 2) {
                                    echo "<img src='images/two_star.png'>";
                                } else if ($row['all_evaluation'] == 3) {
                                    echo "<img src='images/three_star.png'>";
                                } else if ($row['all_evaluation'] == 4) {
                                    echo "<img src='images/four_star.png'>";
                                } else if ($row['all_evaluation'] == 5) {
                                    echo "<img src='images/five_star.png'>";
                                }
        
                                echo "<p><strong>給分甜度:</strong> </p>";
                                if ($row['credit_sweet'] == 1) {
                                    echo "<img src='images/one_star.png'>";
                                } else if ($row['credit_sweet'] == 2) {
                                    echo "<img src='images/two_star.png'>";
                                } else if ($row['credit_sweet'] == 3) {
                                    echo "<img src='images/three_star.png'>";
                                } else if ($row['credit_sweet'] == 4) {
                                    echo "<img src='images/four_star.png'>";
                                } else if ($row['credit_sweet'] == 5) {
                                    echo "<img src='images/five_star.png'>";
                                }
        
                                echo "<p><strong>含金量:</strong> </p>";
                                if ($row['learning'] == 1) {
                                    echo "<img src='images/one_star.png'>";
                                } else if ($row['learning'] == 2) {
                                    echo "<img src='images/two_star.png'>";
                                } else if ($row['learning'] == 3) {
                                    echo "<img src='images/three_star.png'>";
                                } else if ($row['learning'] == 4) {
                                    echo "<img src='images/four_star.png'>";
                                } else if ($row['learning'] == 5) {
                                    echo "<img src='images/five_star.png'>";
                                }
        
                                echo "<p><strong>老師78程度:</strong> </p>";
                                if ($row['evilking_level'] == 1) {
                                    echo "<img src='images/one_star.png'>";
                                } else if ($row['evilking_level'] == 2) {
                                    echo "<img src='images/two_star.png'>";
                                } else if ($row['evilking_level'] == 3) {
                                    echo "<img src='images/three_star.png'>";
                                } else if ($row['evilking_level'] == 4) {
                                    echo "<img src='images/four_star.png'>";
                                } else if ($row['evilking_level'] == 5) {
                                    echo "<img src='images/five_star.png'>";
                                }
                                echo '</div>';
                                echo '<button class="show-full-content">learn more</button>';
                                echo '<button class="show-partial-content" style="display: none;">Show less</button>';
                                echo '</div>';
        
                            }
                        } else {
                            echo "0 筆結果";
                        }
        
                        $link->close();
                        ?>
                    </div>
					<div class="row">
						<div class="4u">
							<section><h3>課程分類</h3>
								<ul class="alt">
									<li><a href="#">通識教育必修</a>
										<ul id="class">
											<li><a href="#">國文</a></li>
											<li><a href="#">英文</a></li>
											<li><a href="#">體育</a></li>
										</ul> 
									</li>
									<li><a href="#">通識選修</a></li>
									<li><a href="#">專業必修</a></li>
									<li><a href="#">專業選修</a></li>
									<li><a href="#">共同選修</a></li>
									<li><a href="#">網路通識</a></li>
								</ul></section><hr>
							<!--<section><h3>Magna massa blandit</h3>
								<p>Feugiat amet accumsan ante aliquet feugiat accumsan. Ante blandit accumsan eu amet tortor non lorem felis semper. Interdum adipiscing orci feugiat penatibus adipiscing col cubilia lorem ipsum dolor sit amet feugiat consequat.</p>
								<ul class="actions"><li><a href="#" class="button alt">Learn More</a></li>
								</ul></section>-->
						</div>
						<div class="8u skel-cell-important">
						    <form method="GET">
							<section>
								<h2 style="text-align: center; margin-top: 80px">以課程名稱搜尋</h2>
								<!-- 创建一个输入框 -->
								<input type="text" id="searchInput" name="course" placeholder="例: 網際網路服務">
								<!-- 创建一个搜索按钮 -->
								<button type="submit" id="search">搜尋</button></section>
							</form>
							<form method="GET">
							    <section>
								<br><h2 style="text-align: center; margin-top: 20px">以老師搜尋</h2>
								<!-- 创建一个输入框 -->
								<input type="text" id="searchInput" name="teacher" placeholder="例: 許政穆">
								<!-- 创建一个搜索按钮 -->
								<button type="submit" id="search">搜尋</button>

								<!--<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" width="818" height="340"></a>-->
								<p></p>
								<p></p>
							</section></form></div>
					</div>
					<!--<hr class="major"><div class="row">
						<div class="6u">
							<section class="special"><a href="#" class="image fit"><img src="images/pic01.jpg" alt="" width="680" height="308"></a>
								<h3>Mollis adipiscing nisl</h3>
								<p>Eget mi ac magna cep lobortis faucibus accumsan enim lacinia adipiscing metus urna adipiscing cep commodo id. Ac quis arcu amet. Arcu nascetur lorem adipiscing non faucibus odio nullam arcu lobortis. Aliquet ante feugiat. Turpis aliquet ac posuere volutpat lorem arcu aliquam lorem.</p>
								<ul class="actions"><li><a href="#" class="button alt">Learn More</a></li>
								</ul></section></div>
						<div class="6u">
							<section class="special"><a href="#" class="image fit"><img src="images/pic02.jpg" alt="" width="680" height="308"></a>
								<h3>Neque ornare adipiscing</h3>
								<p>Eget mi ac magna cep lobortis faucibus accumsan enim lacinia adipiscing metus urna adipiscing cep commodo id. Ac quis arcu amet. Arcu nascetur lorem adipiscing non faucibus odio nullam arcu lobortis. Aliquet ante feugiat. Turpis aliquet ac posuere volutpat lorem arcu aliquam lorem.</p>
								<ul class="actions"><li><a href="#" class="button alt">Learn More</a></li>
								</ul></section></div>
					</div>-->
				</div>
			</section>
			<section id="main" class="wrapper style1">
    <h1 style="text-align: center; font-size: 42px;">查詢結果</h1>
    <div class = 'coursecontainer'>
        <div>
    <?php
        $link = mysqli_connect("localhost", "id21704570_orange", "Orange7749.", "id21704570_orange");
    
        // Check connection
        if ($link->connect_error) {
            die("Connection failed: " . $link->connect_error);
        }
    
        // Handle search request for teacher or course
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET['teacher'])) {
                $teacher = $_GET['teacher'];
                if (!empty($teacher)) {
                    $sql = "SELECT * FROM evaluation WHERE teacher = '$teacher'";
                    $result = $link->query($sql);
    
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="evaluation-block" >';

                            //echo "<p><strong>Course ID:</strong> " . $row['course_id'] . "</p>";
                            //echo "<p><strong>Big Category:</strong> " . $row['big_category'] . "</p>";
                            echo "<p class = 'scroll'><strong>課程類別 :</strong> <span class='pfont'>" . $row['small_category'] . "</p>";
                            echo "<p><strong>課程名稱 :</strong> <span class='pfont'>" . $row['course_name'] . "</span></p>";
                            echo "<p><strong>老師 :</strong> <span class='pfont'>" . $row['teacher'] . "</span></p>";

                            echo '<div class="full-content" style="display: none;">';
                            echo "<p><strong>Thoughts:</strong> " . $row['thoughts'] . "</p>";
                       echo "<p><strong>整體評價:</strong> </p>";
                                    if ($row['all_evaluation'] == 1) {
                                        echo "<img src='images/one_star.png'>";
                                    } else if ($row['all_evaluation'] == 2) {
                                        echo "<img src='images/two_star.png'>";
                                    } else if ($row['all_evaluation'] == 3) {
                                        echo "<img src='images/three_star.png'>";
                                    } else if ($row['all_evaluation'] == 4) {
                                        echo "<img src='images/four_star.png'>";
                                    } else if ($row['all_evaluation'] == 5) {
                                        echo "<img src='images/five_star.png'>";
                                    }
       
                                    echo "<p><strong>給分甜度:</strong> </p>";
                                    if ($row['credit_sweet'] == 1) {
                                        echo "<img src='images/one_star.png'>";
                                    } else if ($row['credit_sweet'] == 2) {
                                        echo "<img src='images/two_star.png'>";
                                    } else if ($row['credit_sweet'] == 3) {
                                        echo "<img src='images/three_star.png'>";
                                    } else if ($row['credit_sweet'] == 4) {
                                        echo "<img src='images/four_star.png'>";
                                    } else if ($row['credit_sweet'] == 5) {
                                        echo "<img src='images/five_star.png'>";
                                    }
       
                                    echo "<p><strong>含金量:</strong> </p>";
                                    if ($row['learning'] == 1) {
                                        echo "<img src='images/one_star.png'>";
                                    } else if ($row['learning'] == 2) {
                                        echo "<img src='images/two_star.png'>";
                                    } else if ($row['learning'] == 3) {
                                        echo "<img src='images/three_star.png'>";
                                    } else if ($row['learning'] == 4) {
                                        echo "<img src='images/four_star.png'>";
                                    } else if ($row['learning'] == 5) {
                                        echo "<img src='images/five_star.png'>";
                                    }
       
                                    echo "<p><strong>老師78程度:</strong> </p>";
                                    if ($row['evilking_level'] == 1) {
                                        echo "<img src='images/one_star.png'>";
                                    } else if ($row['evilking_level'] == 2) {
                                        echo "<img src='images/two_star.png'>";
                                    } else if ($row['evilking_level'] == 3) {
                                        echo "<img src='images/three_star.png'>";
                                    } else if ($row['evilking_level'] == 4) {
                                        echo "<img src='images/four_star.png'>";
                                    } else if ($row['evilking_level'] == 5) {
                                        echo "<img src='images/five_star.png'>";
                                    }
       
                        echo '</div>';
                        echo '<button class="show-full-content">learn more</button>';
                        echo '<button class="show-partial-content" style="display: none;">Show less</button>';
                        echo '</div>';
                    }
                } else {
                    echo "No results found.";
                }
                }
            } elseif (isset($_GET['course'])) {
                $course = $_GET['course'];
                if (!empty($course)) {
                    $sql = "SELECT * FROM evaluation WHERE course_name = '$course'";
                    $result = $link->query($sql);
    
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="evaluation-block" >';

                            //echo "<p><strong>Course ID:</strong> " . $row['course_id'] . "</p>";
                            //echo "<p><strong>Big Category:</strong> " . $row['big_category'] . "</p>";
                            echo "<p class = 'scroll'><strong>課程類別 :</strong> <span class='pfont'>" . $row['small_category'] . "</p>";
                            echo "<p><strong>課程名稱 :</strong> <span class='pfont'>" . $row['course_name'] . "</span></p>";
                            echo "<p><strong>老師 :</strong> <span class='pfont'>" . $row['teacher'] . "</span></p>";

                            echo '<div class="full-content" style="display: none;">';
                            echo "<p><strong>Thoughts:</strong> " . $row['thoughts'] . "</p>";
                       echo "<p><strong>整體評價:</strong> </p>";
                                    if ($row['all_evaluation'] == 1) {
                                        echo "<img src='images/one_star.png'>";
                                    } else if ($row['all_evaluation'] == 2) {
                                        echo "<img src='images/two_star.png'>";
                                    } else if ($row['all_evaluation'] == 3) {
                                        echo "<img src='images/three_star.png'>";
                                    } else if ($row['all_evaluation'] == 4) {
                                        echo "<img src='images/four_star.png'>";
                                    } else if ($row['all_evaluation'] == 5) {
                                        echo "<img src='images/five_star.png'>";
                                    }
       
                                    echo "<p><strong>給分甜度:</strong> </p>";
                                    if ($row['credit_sweet'] == 1) {
                                        echo "<img src='images/one_star.png'>";
                                    } else if ($row['credit_sweet'] == 2) {
                                        echo "<img src='images/two_star.png'>";
                                    } else if ($row['credit_sweet'] == 3) {
                                        echo "<img src='images/three_star.png'>";
                                    } else if ($row['credit_sweet'] == 4) {
                                        echo "<img src='images/four_star.png'>";
                                    } else if ($row['credit_sweet'] == 5) {
                                        echo "<img src='images/five_star.png'>";
                                    }
       
                                    echo "<p><strong>含金量:</strong> </p>";
                                    if ($row['learning'] == 1) {
                                        echo "<img src='images/one_star.png'>";
                                    } else if ($row['learning'] == 2) {
                                        echo "<img src='images/two_star.png'>";
                                    } else if ($row['learning'] == 3) {
                                        echo "<img src='images/three_star.png'>";
                                    } else if ($row['learning'] == 4) {
                                        echo "<img src='images/four_star.png'>";
                                    } else if ($row['learning'] == 5) {
                                        echo "<img src='images/five_star.png'>";
                                    }
       
                                    echo "<p><strong>老師78程度:</strong> </p>";
                                    if ($row['evilking_level'] == 1) {
                                        echo "<img src='images/one_star.png'>";
                                    } else if ($row['evilking_level'] == 2) {
                                        echo "<img src='images/two_star.png'>";
                                    } else if ($row['evilking_level'] == 3) {
                                        echo "<img src='images/three_star.png'>";
                                    } else if ($row['evilking_level'] == 4) {
                                        echo "<img src='images/four_star.png'>";
                                    } else if ($row['evilking_level'] == 5) {
                                        echo "<img src='images/five_star.png'>";
                                    }
       
                        echo '</div>';
                        echo '<button class="show-full-content">learn more</button>';
                        echo '<button class="show-partial-content" style="display: none;">Show less</button>';
                        echo '</div>';
                    }
                } else {
                    echo "No results found.";
                }
                }
            }
        }
    
        // Close connection
        $link->close();
    ?>
    </div>
    </div>
    </section>

			
			<!-- Footer -->
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

    <!---寫顯示完整內容的按鈕--->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
    var showButtons = document.querySelectorAll(".show-full-content, .show-partial-content");

    showButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            var evaluationBlock = button.closest(".evaluation-block");
            var fullContent = evaluationBlock.querySelector(".full-content");

            if (fullContent && button.classList.contains("show-full-content")) {
                // 在顯示完整內容之前儲存原始高度
                var originalHeight = evaluationBlock.offsetHeight;
                fullContent.style.display = "block";
                button.style.display = "none";
                evaluationBlock.querySelector(".show-partial-content").style.display = "inline-block";

                // 計算並調整 div 高度以容納完整內容
                var newHeight = originalHeight + fullContent.offsetHeight;
                evaluationBlock.style.height = newHeight + "px";

                // 滑動到該筆資料的 div 最上層，停在頂部一點
                smoothScrollTo(evaluationBlock.offsetTop - 40, 300); // offsetTop可以調整上滑距離  調整後面數字以控制往上滑的時間
            } else if (button.classList.contains("show-partial-content")) {
                // 隱藏完整內容並顯示「繼續閱讀」按鈕
                fullContent.style.display = "none";
                button.style.display = "none";
                evaluationBlock.querySelector(".show-full-content").style.display = "inline-block";

                // 恢復原始 div 高度
                evaluationBlock.style.height = "260px"; // 這裡替換為原本的高度，您需要使用原本的高度值

                // 平滑捲動回到 div 的頂端
                smoothScrollTo(evaluationBlock.offsetTop - 40, 300);
            }
        });
    });

    function smoothScrollTo(targetPosition, duration) {
        var startPosition = window.scrollY || window.pageYOffset,
            distance = targetPosition - startPosition,
            startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            var timeElapsed = currentTime - startTime;
            var progress = Math.min(timeElapsed / duration, 1);
            var ease = easeInOutQuad(progress);

            window.scrollTo(0, startPosition + distance * ease);

            if (timeElapsed < duration) {
                requestAnimationFrame(animation);
            }
        }

        function easeInOutQuad(t) {
            return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
        }

        requestAnimationFrame(animation);
    }
});


    </script>

	</body></html>
