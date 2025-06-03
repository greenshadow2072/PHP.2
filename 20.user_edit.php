<?php

    error_reporting(0);                                                                                    // 關閉錯誤報告
    session_start();                     14.user_add_form.php 15.user_add.php 17.user_delete.php 18.user.php 19.user_edit_form.php 20.user_edit.php 22.bulletin_add_form.php 23.bulletin_add.php 26.bulletin_edit_form.php 27.bulletin_edit.php 28.bulletin_delete.php 31.immust_bulletin.php                                                                  // 啟動 Session 機制
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){      // 執行更新密碼的 SQL 語句
            echo "修改錯誤";                                                                                // 如果執行失敗，顯示錯誤訊息並跳轉
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }else{
            echo "修改成功，三秒鐘後回到網頁";                                                                // 修改成功訊息並跳轉
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }

?> 
