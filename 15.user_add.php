<?php

error_reporting(0);                                                               // 關閉錯誤訊息顯示，避免錯誤訊息暴露給使用者
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號";                                                             //提示使用者必須登入
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";               // 3 秒後自動跳轉到登入頁面
}
else{    

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");        // 連接到遠端資料庫，參數依序為：主機、使用者名稱、密碼、資料庫名稱
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";    // 建立新增使用者的 SQL 語句，使用 POST 傳入的 id 與 pwd 欄位值
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {                                               // 如果執行 SQL 指令失敗
     echo "新增命令錯誤";                                                           // 顯示錯誤訊息
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>
