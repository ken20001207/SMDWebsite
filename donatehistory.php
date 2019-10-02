<?php 

include("mysqlsettings.php");


$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'donate');
if ($conn->connect_errno) {
	echo "與伺服器資料庫連線失敗";
	exit();
}
$result = $conn->query("SELECT * FROM `data` WHERE `RtnMsg`='交易成功' ORDER BY `TradeAmt` DESC,`PaymentDate` DESC")
	or die(mysql_error());

	while($row = mysqli_fetch_assoc($result)) {
        echo "<li style=\"font-size: 18px\"><img src=\"https://minotar.net/helm/". $row["player"]."/18.png\"/> ". $row["player"]." 在 ". $row["PaymentDate"]." 贊助 NT$ ". $row["TradeAmt"]." </li>";
    }
	

?>