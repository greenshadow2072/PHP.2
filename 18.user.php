<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號";//// 提示必須登入
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   
            echo "<h1>使用者管理</h1> 
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>"; // 已登入，顯示使用者管理頁面內容
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");// 連接資料庫
            $result=mysqli_query($conn, "select * from user");// 查詢 user 表格中所有使用者資料
            
            while ($row=mysqli_fetch_array($result)){// 逐筆讀取查詢結果，並輸出成表格列
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";// 每列顯示「修改」與「刪除」連結，以及帳號與密碼
        }
    ?> 
    </body>
</html>
