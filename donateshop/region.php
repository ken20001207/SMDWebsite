<?php

include("mysqlsettings.php");

$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'mcserver');

if ($conn->connect_errno) {
    echo "<script>alert(\"與伺服器資料庫連線失敗，請通知管理員。\");window.location.replace(\"http://yuanyuan.cloud/smd/donate.php\");</script>";
}

$result = $conn->query("SELECT * FROM `userdata` WHERE `id`='" . $_POST["id"] . "';")
    or die(mysql_error());

if (mysqli_num_rows($result) == 0) {
    echo "<script>alert(\"玩家名稱輸入錯誤，或尚未登入過伺服器。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";
    exit();
}

if( !is_numeric($_POST["amount"])) {
    echo "<script>alert(\"數量必須是一個正整數。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";
    exit();
}

$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'donate');
$conn->query("INSERT INTO `sendtoplayer` (`player`, `item`, `receive`, `price`) VALUES ('" . $_POST["id"] . "','[region]". $_POST["amount"] . "',0,". $_POST["amount"]*40 . ");");
echo "<script>alert(\"已經發送至您的遊戲帳號，請登入(或重新登入)查收。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";