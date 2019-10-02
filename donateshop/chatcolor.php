<?php

include("mysqlsettings.php");

$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'mcserver');

$price = 100;

if ($_POST["color"] == "f") { 
    $price = 10;
} else if ($_POST["color"] == "2" || $_POST["color"] == "3" || $_POST["color"] == "9") {
    $price = 25;
} else if ($_POST["color"] == "a" || $_POST["color"] == "b" || $_POST["color"] == "6") {
    $price = 30;
} else if ($_POST["color"] == "e" || $_POST["color"] == "d") {
    $price = 35;
} else {
    echo "<script>alert(\"取得商品售價失敗，請通知管理員。\");window.location.replace(\"http://yuanyuan.cloud/smd/donate.php\");</script>";
    exit();
}

if ($conn->connect_errno) {
    echo "<script>alert(\"與伺服器資料庫連線失敗，請通知管理員。\");window.location.replace(\"http://yuanyuan.cloud/smd/donate.php\");</script>";
    exit();
}

$result = $conn->query("SELECT * FROM `userdata` WHERE `id`='" . $_POST["id"] . "';")
    or die(mysql_error());

if (mysqli_num_rows($result) == 0) {
    echo "<script>alert(\"玩家名稱輸入錯誤，或尚未登入過伺服器。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";
    exit();
}

$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'donate');
$conn->query("INSERT INTO `sendtoplayer` (`player`, `item`, `receive`, `price`) VALUES ('" . $_POST["id"] . "','[chatcolor]" . $_POST["color"] . "',0,". $price . ");");
echo "<script>alert(\"已經發送至您的遊戲帳號，請登入(或重新登入)查收。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";
