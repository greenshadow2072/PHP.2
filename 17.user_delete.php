<?php
    error_reporting(0);
    session_start();                                                                   // 啟動 session，使用 $_SESSION 變數判斷登入狀態
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from user where id='{$_GET["id"]}'";                              // 建立刪除使用者的 SQL 指令，從 GET 參數取得要刪除的使用者 id 
        #echo $sql;
        if (!mysqli_query($conn,$sql)){                                                // 若執行刪除指令失敗
            echo "使用者刪除錯誤";                                                      // 顯示錯誤訊息
        }else{
            echo "使用者刪除成功";                                                      // 顯示刪除成功訊息
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";                // 3 秒後自動跳轉回使用者列表頁面
    }
?>
