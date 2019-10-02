<?php

include("mysqlsettings.php");


$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'mcserver');
if ($conn->connect_errno) {
	echo "與伺服器資料庫連線失敗";
	exit();
}
$result = $conn->query("SELECT * FROM `mcserver`.`families` ORDER BY `level` DESC, `exp` DESC, `ActiveMemberNumber` DESC, `regions` DESC LIMIT 3;")
	or die(mysql_error());

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
	if ($count == 1)
		$first = "<div style=\"display: inline-block; margin: 30px\"><h3><p>1st</p><p style=\"color: brown\">" . $row["name"] . "</p></h3> <p>" . $row["level"] . " 等家族 (" . $row["exp"] . "/" . $row["level"] * 1000 . ")<br>活躍家族成員 " . $row["ActiveMemberNumber"] . " 人<br>領地總面積 " . $row["regions"] . " 平方公尺</p></div>";
	if ($count == 2)
		$second = "<div style=\"display: inline-block; margin: 30px\"><h3><p>2nd</p>" . $row["name"] . "</h3> <p>" . $row["level"] . " 等家族 (" . $row["exp"] . "/" . $row["level"] * 1000 . ")<br>活躍家族成員 " . $row["ActiveMemberNumber"] . " 人<br>領地總面積 " . $row["regions"] . " 平方公尺</p></div>";
	if ($count == 3)
		$third = "<div style=\"display: inline-block; margin: 30px\"><h3><p>3rd</p>" . $row["name"] . "</h3> <p>" . $row["level"] . " 等家族 (" . $row["exp"] . "/" . $row["level"] * 1000 . ")<br>活躍家族成員 " . $row["ActiveMemberNumber"] . " 人<br>領地總面積 " . $row["regions"] . " 平方公尺</p></div>";
	$count++;
}
echo $second . $first . $third;
