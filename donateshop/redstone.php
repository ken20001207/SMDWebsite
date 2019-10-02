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

if ($_POST["r"] < 0 || $_POST["r"] > 255) {
    echo "<script>alert(\"紅色參數必須介於 0 ~ 255。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";
    exit();
}
if ($_POST["g"] < 0 || $_POST["g"] > 255) {
    echo "<script>alert(\"綠色參數必須介於 0 ~ 255。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";
    exit();
}
if ($_POST["b"] < 0 || $_POST["b"] > 255) {
    echo "<script>alert(\"藍色參數必須介於 0 ~ 255。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";
    exit();
}
$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'donate');
$conn->query("INSERT INTO `sendtoplayer` (`player`, `item`, `receive`, `price`) VALUES ('" . $_POST["id"] . "','[particle]REDSTONE(1-" . $_POST["r"] . "-" . $_POST["g"] . "-". $_POST["b"] . "-1)',0,30);");
echo "<script>alert(\"已經發送至您的遊戲帳號，請登入(或重新登入)查收。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";