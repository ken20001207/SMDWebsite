<?php
header('content-type:text/html;charset=utf-8');

include("mysqlsettings.php");

$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'mcserver');

if ($conn->connect_errno) {
    echo "<script>alert(\"與伺服器資料庫連線失敗，請通知管理員。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";
    exit();
}
$pre = "/^[0-9a-zA-Z_\x{4e00}-\x{9fff}]+$/u";
if (!preg_match($pre, $_POST["nickname"])) {
    echo "<script>alert(\"自訂暱稱僅支援英文、數字及繁體中文。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";
    exit();
}

$result = $conn->query("SELECT * FROM `userdata` WHERE `id`='" . $_POST["id"] . "';")
    or die(mysql_error());

if (mysqli_num_rows($result) == 0) {
    echo "<script>alert(\"玩家名稱輸入錯誤，或尚未登入過伺服器。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";
    exit();
}

if (strlen($_POST["nickname"]) > 16 || strlen($_POST["nickname"]) < 4) {
    echo "<script>alert(\"暱稱的長度必須在 4 ~ 16 以內，\\\"" . $_POST["nickname"] . "\\\" 的長度為 " . strlen($_POST["nickname"]) . "\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";
    exit();
}


$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'donate');
$conn->query("INSERT INTO `sendtoplayer` (`player`, `item`, `receive`, `price`) VALUES ('" . $_POST["id"] . "','[nickname]" . $_POST["nickname"] .  "',0,75);");
echo "<script>alert(\"已經發送至您的遊戲帳號，請登入(或重新登入)查收。\");window.location.replace(\"http://yuanyuan.cloud/smd/donateshop.php\");</script>";
