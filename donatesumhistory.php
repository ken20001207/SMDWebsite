<?php 

include("mysqlsettings.php");


$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'donate');
if ($conn->connect_errno) {
	echo "與伺服器資料庫連線失敗";
	exit();
}
$result = $conn->query("SELECT player, SUM(TradeAmt) FROM `data` GROUP BY player ORDER BY SUM(TradeAmt) DESC")
	or die(mysql_error());

	while($row = mysqli_fetch_assoc($result)) {
        echo "<li style=\"font-size: 18px\"><img src=\"https://minotar.net/helm/". $row["player"]."/18.png\"/> ". $row["player"]." 總共贊助 NT$ ". $row["SUM(TradeAmt)"]." </li>";
    }
	

?>