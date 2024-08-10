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

// 關閉資料庫連線
mysqli_close($link);
?>
<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
--><html><head><title>個人資料編輯</title><link rel="icon" type="image/png" href="images/orange.png"><meta http-equiv="content-type" content="text/html; charset=utf-8"><meta name="description" content=""><meta name="keywords" content=""><meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"><!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]--><script src="js/jquery.min.js"></script><script src="js/skel.min.js"></script><script src="js/skel-layers.min.js"></script><script src="js/init.js"></script><noscript>
			<link rel="stylesheet" href="css/skel.css"><link rel="stylesheet" href="css/style.css"><link rel="stylesheet" href="css/style-xlarge.css"></noscript>
			
		</head><body id="top">	
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
                        <a href="users.php"><img src="images/manage.png" alt="User Avatar" style="width: 40px; height: 40px;"></a>
                        <ul class="dropdown">
                        <li><a href="login_front.php">Log out</a></li>
                        <li><a href="personal_profile.php">編輯</a></li>
                        </ul>
                        </li>
            
                    </ul>
                </nav>
                <style>
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
                    
                    #main {
                    background-color: #607274;
                    padding: 50px; /* 根據需要調整內邊距 */
                    display: flex;
                    justify-content: space-between;
                    
                    }
                
                    #main p {
                        color: black; /* 文字顏色為白色 */
                        font-size: 18px; /* 文字大小 */
                    }
                
                    .white-box {
                        margin-top: 100px;
                        background-color: white;
                        border-radius: 10px; /* 弧度 */
                        padding: 20px; /* 根據需要調整內邊距 */
                        box-sizing: border-box; /* 確保內邊距和邊框不會增加匡的寬度 */
                    }
                
                    #left-box {
                        margin-right: 20px; /* 左邊匡的右邊空隙寬度 */
                    }
                
                    #right-box {
                        margin-left: 20px; /* 右邊匡的左邊空隙寬度 */
                    }
                    
                    .pic-body {
                      font-family: Arial, sans-serif;
                      display: flex;
                      align-items: center;
                      justify-content: center;
                      flex-direction: column;
                      height: 60vh;
                      margin: 0;
                      background-color: white;
                      color: white;
                    }
                    
                    #image-container {
                      width: 200px;
                      height: 200px;
                      overflow: hidden;
                      border-radius: 50%;
                      border: 2px solid #607274;
                      position: relative;
                      margin-bottom: 20px;
                    }
                    
                    #uploaded-image {
                      width: 100%;
                      height: 100%;
                      object-fit: cover;
                      border-radius: 50%;
                    }
                    
                    #upload-input {
                      display: none;
                    }
                    
                    #upload-label {
                      background-color: #607274;
                      color: #fff;
                      padding: 10px 15px;
                      cursor: pointer;
                      border-radius: 5px;
                      transition: background-color 0.3s;
                    }
                    
                    #upload-label:hover {
                      background-color: #2980b9;
                    }
                    
                    hr {
                        margin: 5px 0;
                    }
    
                </style>
                </header><!-- Main -->
						<section id="main">
                        <form style="float: left; width: 40%;" id="left-box" class="white-box">
                            <h2 style="font-size: 30px; font-weight: bold; text-align: center; color:#607274;">個 人 頭 像</h2>
                            <section class="pic-body">
                                <div id="image-container">
                                  <img id="uploaded-image" src="images/manage.png" alt="" />
                                </div><br>
                                <input
                                  type="file"
                                  id="upload-input"
                                  accept="image/*"
                                  onchange="displayImage()"
                                />
                                <label for="upload-input" id="upload-label">Upload Image</label>
                            </section>
                        </form>
                        
                        <!-- 將 "科系"、"自介"、和"用戶暱稱" 放在同一個 <div> 中 -->
                        <form style="float: right; width: 55%;" id="right-box" class="white-box">
                            <h2 style="font-size: 30px; font-weight: bold; text-align: center;color:#607274; ">個 人 資 訊</h2>
                        
                            <!-- 用戶暱稱 -->
                            <div style=" align-items: center; margin-bottom: 10px;">
                                <p style="margin-right: 10px; color:#607274;font-weight: bold;">用戶暱稱:</p>
                                <div contenteditable="true" id="" style="font-size: 18px; font-weight: bold; color:black;">
                                    <?php echo $userName; ?>
                                </div>
                            </div>
                            <hr>
                        
                            <!-- 自介 -->
                            <div style="align-items: center; margin-bottom: 10px;">
                                <p style="margin-right: 10px; color:#607274; font-weight: bold;">自介:</p>
                                <div contenteditable="true" id="bio" style="font-size: 18px; font-weight: bold; color:black;">
                                    <?php echo $userName; ?>
                                </div>
                            </div>
                            <hr>
                        
                            <!-- 科系 -->
                            <div style="align-items: center; margin-bottom: 10px;">
                                <p style="margin-right: 10px; color:#607274;font-weight: bold;">科 系:</p>
                                <div contenteditable="true" id="department" style="font-size: 18px; font-weight: bold; color:black;">
                                    <?php echo $userName; ?>
                                </div>
                            </div>
                            <hr>
                            
                            <!--gmail-->
                            <div style="align-items: center; margin-bottom: 10px;">
                                <p style="margin-right: 10px; color:#607274; font-weight: bold;">電子郵件:</p>
                               
                                <div contenteditable="true" id="gmail" style="font-size: 18px; font-weight: bold; color:black;">
                                    <?php echo $userName; ?>
                                </div>
                            </div>
                            <button onclick="saveUsername()" style="float:right;">儲存</button>
                        </form>

                        <script>
                            document
                              .getElementById("upload-input")
                              .addEventListener("change", displayImage);
                            
                            function displayImage() {
                              const input = document.getElementById("upload-input");
                              const file = input.files[0];
                              if (file) {
                                const reader = new FileReader();
                                reader.onload = function (event) {
                                  const imageDataUrl = event.target.result;
                                  updateImageSrc(imageDataUrl);
                                };
                                reader.onerror = function (error) {
                                  console.error("Error reading the file:", error);
                                };
                                reader.readAsDataURL(file);
                              }
                            }
                            
                            function updateImageSrc(src) {
                              const uploadedImage = document.getElementById("uploaded-image");
                              uploadedImage.src = src;
                            }
                            
                        </script>
                        </section>
						<!-- Footer --><footer id="footer">
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

	</body></html>