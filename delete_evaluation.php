<?php
session_start(); // 開啟 session

$link = mysqli_connect("localhost", "id21704570_orange", "Orange7749.", "id21704570_orange");

// 檢查連線
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['evaluation_id'])) {
        $evaluation_id = $_POST['evaluation_id'];

        // 在資料庫中進行刪除
        $sql = "DELETE FROM evaluation WHERE evaluation_id = '$evaluation_id'";
        if ($link->query($sql) === TRUE) {
            // 成功刪除評價後，重新導向到 manage.php
            header("Location: manage.php");
            exit();
        } else {
            echo "刪除記錄時發生錯誤：" . $link->error;
        }
    }
}

// 關閉連線
$link->close();
?>
