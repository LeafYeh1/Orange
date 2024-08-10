<?php
session_start();

// Google OAuth 2.0 驗證參數
$clientId = "816988876922-fds8lna3j0nc2c8qqc5uh0c1h163dm4g.apps.googleusercontent.com"; // 用戶端 ID，從 Google 開發者控制台獲取
$clientSecret = "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"; // 客戶端密碼，從 Google 開發者控制台獲取
$redirectUri = "https://orange66.000webhostapp.com/orange/google-callback.php"; // 您的回調 URI，與開發者控制台中的設定一致

// 檢查是否有授權碼
if (isset($_GET['code'])) {
    // 使用授權碼向 Google 發送請求以獲取令牌
    $code = $_GET['code'];
    $tokenUrl = "https://oauth2.googleapis.com/token";
    $tokenData = [
        'code' => $code,
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
        'redirect_uri' => $redirectUri,
        'grant_type' => 'authorization_code'
    ];

    $ch = curl_init($tokenUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $tokenData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $tokenResult = curl_exec($ch);
    curl_close($ch);

    $tokenData = json_decode($tokenResult, true);

    if (isset($tokenData['access_token'])) {
        // 使用令牌向 Google 發送請求以獲取使用者信息
        $userInfoUrl = "https://www.googleapis.com/oauth2/v1/userinfo?access_token=" . $tokenData['access_token'];
        $userInfoResult = file_get_contents($userInfoUrl);
        $userInfo = json_decode($userInfoResult, true);

        // 在這裡處理使用者信息，例如保存到資料庫，設置用戶會話等
        handleUserInfo($userInfo);

        // 最後，將用戶重定向到您應用程序的主頁面
        header("Location: users.php");
        exit();
    } else {
        echo "無法獲取令牌。";
    }
} else {
    echo "缺少授權碼。";
}


function handleUserInfo($userInfo) {
    // 在這裡處理使用者信息，將其保存到資料庫
    global $clientId, $redirectUri;

    // 假設這裡是您本地資料庫的連接
   $link = mysqli_connect("localhost", "id21704570_orange", "Orange7749.", "id21704570_orange")
        or die("無法開啟MySQL資料庫連接!<br/>");

    if (isset($userInfo['id'])) {
        $googleUserId = $userInfo['id'];
        $googleEmail = $userInfo['email'];
        $googleName = $userInfo['name'];

        // 檢查資料庫中是否已存在該 Google 使用者
        $sqlCheckUser = "SELECT * FROM users WHERE google_user_id = '{$googleUserId}'";
        $resultCheckUser = mysqli_query($link, $sqlCheckUser);
        $existingUser = mysqli_fetch_assoc($resultCheckUser);

        if (!$existingUser) {
            // 如果資料庫中沒有該 Google 使用者，插入新使用者記錄
            $sqlInsertUser = "INSERT INTO users (google_user_id, email, name) VALUES ('$googleUserId', '$googleEmail', '$googleName')";
            mysqli_query($link, $sqlInsertUser);
        }
        // 在這裡添加將 Google 使用者名字保存到 $_SESSION 中的代碼
        $_SESSION['user_name'] = $googleName;
    }

    // 關閉資料庫連接
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>google-callback.php</title>
</head>
<body>


</body>
</html>