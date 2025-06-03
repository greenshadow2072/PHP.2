<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{                                                                                         // 建立資料庫連線
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");                  
        $sql="insert into bulletin(title, content, type, time)                                    // 組合 SQL
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){                                                          // 執行 SQL 語句
            echo "新增命令錯誤";                                                                   // 執行失敗
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";                                                  // 成功訊息
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";                   // 跳轉回佈告頁
        } 
    }
?>
