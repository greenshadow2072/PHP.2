<?php

    error_reporting(0);// 關閉錯誤訊息顯示
    session_start();// 啟動 session，用來追蹤使用者登入狀態
    // 檢查 session 中是否有 "id"，代表使用者是否已登入
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
     // 使用者已登入，建立與資料庫的連線
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            echo "修改錯誤";// 如果更新失敗，顯示錯誤訊息
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }else{
            echo "修改成功，三秒鐘後回到網頁";// 3 秒後跳轉回使用者頁面
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }

?>
