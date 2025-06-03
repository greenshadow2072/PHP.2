<html>
    <head><title>新增使用者</title></head>                              //網頁標題為新增使用者
    <body>
<?php        
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {                                            //如果尚未登入（session 中沒有 id 資料）
        echo "請登入帳號";                                              //顯示提示訊息：請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//等待 3 秒後自動跳轉到 login 頁面
    }
    else{    
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
?>
    </body>
</html>
