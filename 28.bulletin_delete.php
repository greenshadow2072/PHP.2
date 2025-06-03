<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");// 建立資料庫連線
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";// 組成刪除指定 bid 的 SQL 指令
        #echo $sql; // 除錯用，可顯示實際 SQL 指令
        // 執行刪除指令
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";// 執行失敗時顯示訊息
        }else{
            echo "佈告刪除成功";// 成功刪除時顯示訊息
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>
