<?php

include("mysqlsettings.php");


$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'mcserver');
if ($conn->connect_errno) {
    echo "與伺服器資料庫連線失敗";
    exit();
}
$result = $conn->query("SELECT SUM(size) FROM `regions`;")
    or die(mysql_error());

while ($row = mysqli_fetch_assoc($result)) {
    $sum_size = $row["SUM(size)"];
}

$result = $conn->query("SELECT lordname , SUM(size) FROM `regions` GROUP BY lordname ORDER BY SUM(size) DESC LIMIT 3;")
    or die(mysql_error());

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    if ($count == 1) {
        $biggest_lordname1 = $row["lordname"];
        $biggest_size1 = $row["SUM(size)"];
    } else if ($count == 2) {
        $biggest_lordname2 = $row["lordname"];
        $biggest_size2 = $row["SUM(size)"];
    } else if ($count == 3) {
        $biggest_lordname3 = $row["lordname"];
        $biggest_size3 = $row["SUM(size)"];
    }
    $count++;
}

$result = $conn->query("SELECT `name`,`size`  FROM `regions` WHERE `lordname`='" . $biggest_lordname1 . "' ORDER BY size DESC;")
    or die(mysql_error());

$regions1 = "";
$limit = 0;
while ($row = mysqli_fetch_assoc($result)) {

    if($limit > 4) {
        $regions1 = $regions1 . " <br> (以下省略)";
        break;
    }

    $limit++;
    $regions1 = $regions1 . "<br>" . $row["name"] . "(" . $row["size"] . " 平方公尺)";
}

$result = $conn->query("SELECT `name`,`size`  FROM `regions` WHERE `lordname`='" . $biggest_lordname2 . "' ORDER BY size DESC;")
    or die(mysql_error());

$regions2 = "";
$limit = 0;
while ($row = mysqli_fetch_assoc($result)) {
    if($limit > 4) {
        $regions2 = $regions2 . " <br> (以下省略)";
        break;
    }
    $limit++;
    $regions2 = $regions2 ."<br>" . $row["name"] . "(" . $row["size"] . " 平方公尺)";
}

$result = $conn->query("SELECT `name`,`size`  FROM `regions` WHERE `lordname`='" . $biggest_lordname3 . "' ORDER BY size DESC;")
    or die(mysql_error());

$regions3 = "";
$limit = 0;
while ($row = mysqli_fetch_assoc($result)) {
    if($limit > 4) {
        $regions3 = $regions3 . " <br> (以下省略)";
        break;
    }
    $limit++;
    $regions3 =  $regions3 ."<br>" . $row["name"] . "(" . $row["size"] . " 平方公尺)";
}

$biggest_lordname1 = str_replace("family:","家族 ", $biggest_lordname1);
$biggest_lordname2 = str_replace("family:","家族 ", $biggest_lordname2);
$biggest_lordname3 = str_replace("family:","家族 ", $biggest_lordname3);

echo "<div style=\"display: inline-block; margin: 30px\">
<h3>
    <p>2nd</p>
</h3><img style=\"width: 60px\" src=\"https://minotar.net/helm/" . $biggest_lordname2 . "/100.png\" alt=\"\" />
<h3> " . $biggest_lordname2 . "</h3>
<p> 總領地面積 " . $biggest_size2 . " 平方公尺<br>佔全伺服器領地 " . intval(($biggest_size2 / $sum_size) * 100) . "%<br>" . $regions2 . "
</div>";
echo "<div style=\"display: inline-block; margin: 30px\">
<h3>
    <p>1st</p>
</h3><img style=\"width: 60px\" src=\"https://minotar.net/helm/" . $biggest_lordname1 . "/100.png\" alt=\"\" />
<h3 style=\"color: brown\"> " . $biggest_lordname1 . "</h3>
<p> 總領地面積 " . $biggest_size1 . " 平方公尺<br>佔全伺服器領地 " . intval(($biggest_size1 / $sum_size) * 100) . "%<br>" . $regions1 . "
</div>";
echo "<div style=\"display: inline-block; margin: 30px\">
<h3>
    <p>3rd</p>
</h3><img style=\"width: 60px\" src=\"https://minotar.net/helm/" . $biggest_lordname3 . "/100.png\" alt=\"\" />
<h3> " . $biggest_lordname3 . "</h3>
<p> 總領地面積 " . $biggest_size3 . " 平方公尺<br>佔全伺服器領地 " . intval(($biggest_size3 / $sum_size) * 100) . "%<br>" . $regions3 . "
</div>";
