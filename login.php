<?php
// Google OAuth 2.0 驗證參數
$clientId = "816988876922-fds8lna3j0nc2c8qqc5uh0c1h163dm4g.apps.googleusercontent.com"; // 用戶端 ID，從 Google 開發者控制台獲取
$clientSecret = "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"; // 客戶端密碼，從 Google 開發者控制台獲取
$redirectUri = "https://orange66.000webhostapp.com/orange/google-callback.php"; // 您的回調 URI，與開發者控制台中的設定一致
if (isset($_POST["submit-btn"])) {
   // Regular login logic
   handleRegularLogin();
} elseif (isset($_POST["google-submit"])) {
   // Google login logic
   validateGoogleAccount();
} else {
   echo "<center><font color='red'>請輸入使用者名稱和密碼</font></center>";
}

function handleRegularLogin() {
   // Retrieve the username and password from the form
   $username = $_POST["username"];
   $password = $_POST["password"];

   // Validate that both username and password are provided
   if (empty($username) || empty($password)) {
      echo "<script>alert('請輸入使用者名稱和密碼'); window.location.href = 'login_front.php';</script>";
        return;
   }

   // Establish a MySQL database connection
   $link = mysqli_connect("localhost", "id21704570_orange", "Orange7749.", "id21704570_orange")
      or die("無法開啟MySQL資料庫連接!<br/>");

   // Sanitize input to prevent SQL injection (you might want to use prepared statements instead)
   $username = mysqli_real_escape_string($link, $username);
   $password = mysqli_real_escape_string($link, $password);

   // Build and execute the SQL query
   $sql = "SELECT * FROM users WHERE password='$password' AND email='$username'";
   $result = mysqli_query($link, $sql);
   $total_records = mysqli_num_rows($result);

   // Check if a user with the given credentials exists
   if ($total_records > 0) {
      // Successful login, set session variable and redirect to manage.html
      session_start();
      $_SESSION["login_session"] = true;
      header("Location: manage.php");
      exit(); // Ensure the script stops execution after redirection
   } else {
      // Login failed
      echo "<script>alert('使用者名稱或密碼錯誤!'); window.location.href = 'login_front.php';</script>";
        session_start();
        $_SESSION["login_session"] = false;
   }

   // Close the database connection
   mysqli_close($link);
}

function validateGoogleAccount() {
   global $clientId, $redirectUri;

   $googleLoginUrl = "https://accounts.google.com/o/oauth2/auth?" .
       "client_id={$clientId}&" .
       "redirect_uri={$redirectUri}&" .
       "response_type=code&" .
       "scope=email profile";

   header("Location: {$googleLoginUrl}");
   exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>login.php</title>
<link rel="icon" type="image/png" href="images/orange.png">
</head>
<body>
<!--API :816988876922-fds8lna3j0nc2c8qqc5uh0c1h163dm4g.apps.googleusercontent.com-->

</body>
</html>