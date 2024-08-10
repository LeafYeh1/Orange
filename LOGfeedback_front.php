<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>意見回饋</title>
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

		body {
			font-family: 'Arial', sans-serif;
			margin: 0;
			padding: 0;
			background: #f4f4f4;
			color: #333;
		}

		/* Main content styling */
		#main {
			padding: 2em;
		}

		#faq {
			background-color: #f8f8f8;
			padding: 2em 0;
			padding-bottom: 2em;
		}

		.faq-item {
			margin-bottom: 1.5em;
			cursor: pointer;
		}

		.faq-item h3 {
			margin-bottom: 0.5em;
			font-size: 1.2em;
		}

		.faq-item p {
			font-size: 1em;
			display: none;
			/* Hide the answer initially */
		}

		.faq-item.active p {
			display: block;
			/* Show the answer when the FAQ item is active */
		}

		.faq-item h3 {
			position: relative;
		}

		.expand-icon {
			position: absolute;
			top: 50%;
			right: 0;
			transform: translateY(-50%);
			cursor: pointer;
		}

		.faq-item.active .expand-icon {
			transform: translateY(-50%) rotate(90deg);
		}

		/* Feedback Form styling */
		.feedback-container {
			background: #f8f8f8;
			padding: 2em 0;
		}

		.feedback-form label {
			display: block;
			margin-bottom: 8px;
			color: #555;
		}

		.feedback-form input,
		.feedback-form textarea {
			width: 100%;
			padding: 10px;
			margin-bottom: 15px;
			border: 1px solid #ddd;
			border-radius: 4px;
			box-sizing: border-box;
			font-size: 16px;
			margin-bottom: 1em;
		}

		.feedback-form textarea {
			resize: vertical;
			/* Allow vertical resizing of the textarea */
		}

		.feedback-form button {
			background-color: #333;
			color: #fff;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
		}

		.feedback-form button:hover {
			background-color: #2c67a9;
		}

		.rate {
			float: left;
			height: 46px;
			padding: 0 10px;
		}

		.rate:not(:checked)>input {
			position: absolute;
			top: -9999px;
		}

		.rate:not(:checked)>label {
			float: right;
			width: 1em;
			overflow: hidden;
			white-space: nowrap;
			cursor: pointer;
			font-size: 15px;
			color: #ccc;
		}

		.rate:not(:checked)>label:before {
			content: '★ ';
		}

		.rate>input:checked~label {
			color: #ffc700;
		}

		.rate:not(:checked)>label:hover,
		.rate:not(:checked)>label:hover~label {
			color: #deb217;
		}

		.rate>input:checked+label:hover,
		.rate>input:checked+label:hover~label,
		.rate>input:checked~label:hover,
		.rate>input:checked~label:hover~label,
		.rate>label:hover~input:checked~label {
			color: #c59b08;
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
					</ul>
				</li>

			</ul>
		</nav>
	</header><!-- Main -->
	<section id="main" class="wrapper style1">
		<header class="major"></header>
		<section id="faq" class="wrapper style1">
			<header class="major">
				<h2>常見問答</h2>
			</header>
			<div class="faq-container">
				<div class="faq-item">
					<h3>1. 如何上傳課程評價/考古題？</h3>

					<p>請至首頁「我要評論」即可點按上傳課程評價或考古題喲！或是點選網站畫面上的筆歐！</p>
				</div>
				<div class="faq-item">
					<h3>2. 上傳課程評價/考古題是否可以再修改或刪除呢？</h3>

					<p>若您上傳的課程評價/考古題狀態為「未通過」即可修改並重新提交審核，但不能刪除；若「已通過」則無法再修改或刪除。（2023.08.03
						更新：為避免發生同學修改了正在審查的課程評價，因此若為「待審核」狀態則無法修改與刪除。）</p>
				</div>
				<div class="faq-item">
					<h3>3. 為什麼我上傳的課程評價/考古題遭凍結？</h3>

					<p>為確保內容品質，若發現您上傳的課程評價/考古題答非所問，該篇文章將會遭凍結。</p>
				</div>
				<div class="faq-item">
					<h3>4. 為什麼我無法選擇我就讀的大學上傳課程評價呢？</h3>

					<p>各大學課程陸續開放中。</p>
				</div>
				<div class="faq-item">
					<h3>5. 好像有 bug 怎麼辦呢？</h3>

					<p>請您先重新整理頁面或使用 shift + F5，若仍無法排除您的問題，請與我們聯繫 orange66367749@gmail.com，或至
						Instagram：bo_sung_92(鹿寮里里長伯) 搭配「截圖」與我們詳述您遇到的問題，我們會儘速修復與改善，謝謝您！</p>
				</div>
				<div class="faq-item">
					<h3>6. 如何預防帳號遭他人盜用呢？</h3>

					<p>避免於公共電腦登入，例如：圖書館、教室電腦等。建議您定期更新您的密碼、針對您常用電腦進行掃毒作業，或確保帳號並無與他人共用。</p>
				</div>
				<!-- Add more FAQ items as needed -->
			</div>
		</section>
		<form id="feedbackForm">
			<h1>意見回饋</h1>
			<label for="name">名稱：</label>
			<input type="text" id="name" name="name" required><br>

			<label for="email">電子郵件：</label>
			<input type="email" id="email" name="email" required><br>

			<label for="message">意見訊息：</label>
			<textarea id="message" name="message" rows="4" required></textarea><br>

			<label for="rating">評價：</label>
			<div class="rate">
				<input type="radio" id="star5" name="rating" value="5" />
				<label for="star5" title="text">5 stars</label>
				<input type="radio" id="star4" name="rating" value="4" />
				<label for="star4" title="text">4 stars</label>
				<input type="radio" id="star3" name="rating" value="3" />
				<label for="star3" title="text">3 stars</label>
				<input type="radio" id="star2" name="rating" value="2" />
				<label for="star2" title="text">2 stars</label>
				<input type="radio" id="star1" name="rating" value="1" />
				<label for="star1" title="text">1 stars</label>
			</div>
			<br>

			<button type="button" onclick="submitFeedback()"
				style="background-color: #333; color: #fff; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;"
				onmouseover="this.style.backgroundColor='#707070'"
				onmouseout="this.style.backgroundColor='#333'">提交回饋</button>
		</form>
	</section>
	<script>
		function submitFeedback() {
			var form = document.getElementById("feedbackForm");
			var formData = new FormData(form);

			fetch("feedback.php", {
				method: "POST",
				body: formData
			})
				.then(response => response.text())
				.then(result => {
					alert(result); // 或者將結果顯示在頁面上的某個元素中
				})
				.catch(error => {
					console.error('Error:', error);
				});
		}
	</script>
	<script>
		// Add this script for FAQ functionality
		document.addEventListener('DOMContentLoaded', function () {
			var faqItems = document.querySelectorAll('.faq-item');

			faqItems.forEach(function (item) {
				item.addEventListener('click', function () {
					// Toggle the active class to expand/collapse the answer
					this.classList.toggle('active');
				});
			});
		});
	</script>

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

	</section><!-- Footer -->
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