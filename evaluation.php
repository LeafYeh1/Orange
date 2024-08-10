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
    // 其他程式碼...

    // 檢查表單是否提交
    if (isset($_POST['submit-btn'])) {
        // 獲取表單資料
        $course_id = isset($_POST['course_id']) ? $_POST['course_id'] : '';
        $course_name = isset($_POST['course_name']) ? $_POST['course_name'] : '';
        $big_category = isset($_POST['big_category']) ? $_POST['big_category'] : '';
        $small_category = isset($_POST['small_category']) ? $_POST['small_category'] : '';
        $teacher = isset($_POST['teacher']) ? $_POST['teacher'] : '';
        $thoughts = mysqli_real_escape_string($link, $_POST['content']);
        $all_evaluation = mysqli_real_escape_string($link, $_POST['all_evaluation']);
        $credit_sweet = mysqli_real_escape_string($link, $_POST['credit_sweet']);
        $learning = mysqli_real_escape_string($link, $_POST['learning']);
        $evilking_level = mysqli_real_escape_string($link, $_POST['evilking_level']);

        // 将数据插入数据库
        $insert_query = "INSERT INTO evaluation (course_name, teacher, thoughts, all_evaluation, credit_sweet, learning, evilking_level, course_id, big_category, small_category) 
                VALUES ('$course_name', '$teacher', '$thoughts', '$all_evaluation', '$credit_sweet', '$learning', '$evilking_level', '$course_id', '$big_category', '$small_category')";

        if (mysqli_query($link, $insert_query)) {
            // 取得剛插入的 evaluation_id
            $last_inserted_id = mysqli_insert_id($link);
        
            // 資料成功存入資料庫後，進行頁面重新導向
            header("Location: LOGcourse.php");
            exit(); // 確保重新導向後終止腳本執行
        } else {
            echo "存入資料庫時發生錯誤: " . mysqli_error($link);
        }
    }
}

// 關閉資料庫連線
mysqli_close($link);
?>