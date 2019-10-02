<?php

include("mysqlsettings.php");

$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'mcserver');
if ($conn->connect_errno) {
	echo "<script>alert(\"與伺服器資料庫連線失敗，請通知管理員。\");window.location.replace(\"http://yuanyuan.cloud/smd\");</script>";
	exit();
}

// 採礦宗師
$result = $conn->query("SELECT * FROM `userdata` WHERE `iron_master`=1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$oldmaster = $row['id'];

$result = $conn->query("SELECT * FROM `userdata` ORDER BY `iron` DESC LIMIT 1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$master = $row['id'];
$採礦宗師v = $row['iron'];
if ($master != $oldmaster) {
	$conn->query("UPDATE `userdata` SET `iron_master`=0 WHERE `id`='$oldmaster';");
	$conn->query("UPDATE `userdata` SET `iron_master`=1 WHERE `id`='$master';");
}
$採礦宗師 = $master;

// 貿易宗師
$result = $conn->query("SELECT * FROM `userdata` WHERE `trade_master`=1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$oldmaster = $row['id'];

$result = $conn->query("SELECT * FROM `userdata` ORDER BY `trade` DESC LIMIT 1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$master = $row['id'];
$貿易宗師v = $row['trade'];

if ($master != $oldmaster) {
	$conn->query("UPDATE `userdata` SET `trade_master`=0 WHERE `id`='$oldmaster';");
	$conn->query("UPDATE `userdata` SET `trade_master`=1 WHERE `id`='$master';");
}
$貿易宗師 = $master;

// 伐木宗師
$result = $conn->query("SELECT * FROM `userdata` WHERE `wood_master`=1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$oldmaster = $row['id'];

$result = $conn->query("SELECT * FROM `userdata` ORDER BY `wood` DESC LIMIT 1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$master = $row['id'];
$伐木宗師v = $row['wood'];

if ($master != $oldmaster) {
	$conn->query("UPDATE `userdata` SET `wood_master`=0 WHERE `id`='$oldmaster';");
	$conn->query("UPDATE `userdata` SET `wood_master`=1 WHERE `id`='$master';");
}
$伐木宗師 = $master;

// 舞劍宗師
$result = $conn->query("SELECT * FROM `userdata` WHERE `sword_master`=1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$oldmaster = $row['id'];

$result = $conn->query("SELECT * FROM `userdata` ORDER BY `sword` DESC LIMIT 1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$master = $row['id'];
$舞劍宗師v = $row['sword'];

if ($master != $oldmaster) {
	$conn->query("UPDATE `userdata` SET `sword_master`=0 WHERE `id`='$oldmaster';");
	$conn->query("UPDATE `userdata` SET `sword_master`=1 WHERE `id`='$master';");
}
$舞劍宗師 = $master;

// 狙擊宗師
$result = $conn->query("SELECT * FROM `userdata` WHERE `bow_master`=1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$oldmaster = $row['id'];

$result = $conn->query("SELECT * FROM `userdata` ORDER BY `bow` DESC LIMIT 1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$master = $row['id'];
$狙擊宗師v = $row['bow'];

if ($master != $oldmaster) {
	$conn->query("UPDATE `userdata` SET `bow_master`=0 WHERE `id`='$oldmaster';");
	$conn->query("UPDATE `userdata` SET `bow_master`=1 WHERE `id`='$master';");
}
$狙擊宗師 = $master;

// 種植宗師
$result = $conn->query("SELECT * FROM `userdata` WHERE `ripe_master`=1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$oldmaster = $row['id'];

$result = $conn->query("SELECT * FROM `userdata` ORDER BY `ripe` DESC LIMIT 1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$master = $row['id'];
$種植宗師v = $row['ripe'];

if ($master != $oldmaster) {
	$conn->query("UPDATE `userdata` SET `ripe_master`=0 WHERE `id`='$oldmaster';");
	$conn->query("UPDATE `userdata` SET `ripe_master`=1 WHERE `id`='$master';");
}
$種植宗師 = $master;

// 加工宗師
$result = $conn->query("SELECT * FROM `userdata` WHERE `magic_master`=1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$oldmaster = $row['id'];

$result = $conn->query("SELECT * FROM `userdata` ORDER BY `magic` DESC LIMIT 1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$master = $row['id'];
$加工宗師v = $row['magic'];
if ($master != $oldmaster) {
	$conn->query("UPDATE `userdata` SET `magic_master`=0 WHERE `id`='$oldmaster';");
	$conn->query("UPDATE `userdata` SET `magic_master`=1 WHERE `id`='$master';");
}
$加工宗師 = $master;

// 釣魚宗師
$result = $conn->query("SELECT * FROM `userdata` WHERE `fish_master`=1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$oldmaster = $row['id'];

$result = $conn->query("SELECT * FROM `userdata` ORDER BY `fish` DESC LIMIT 1;")
	or trigger_error($conn->error);
$row = mysqli_fetch_assoc($result);

$master = $row['id'];
$釣魚宗師v = $row['fish'];

if ($master != $oldmaster) {
	$conn->query("UPDATE `userdata` SET `fish_master`=0 WHERE `id`='$oldmaster';");
	$conn->query("UPDATE `userdata` SET `fish_master`=1 WHERE `id`='$master';");
}
$釣魚宗師 = $master;


?>


<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
<title> SMD : Kingdoms - 宗師系統</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets6/css/main.css" />

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css3/materialize.css" media="screen,projection" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<style>
		@import url(//fonts.googleapis.com/earlyaccess/notosanstc.css);

		body {
			/* 先套用 Noto Sans TC 這個 思源黑體 */
			font-family: 'Noto Sans TC', '微軟正黑體', sans-serif;
		}
	</style>
</head>

<body class="subpage">

	<!-- 上方浮動導航欄 & 右方展開導覽列 -->
    <?php require "echonav.php";?>

	<!-- One -->
	<section id="One" class="wrapper style3">
		<div class="inner">
			<header class="align-center">
				<p>伺服器玩家熟練度排行榜</p>
				<h2>宗師系統</h2>
			</header>
		</div>
	</section>

	<!-- Two -->
	<section id="one" class="wrapper style2">
		<div class="inner align-center">
		<p>由於玩家在登入登出時才會進行更新，因此顯示的資料可能不是精確數值。</p>
			<div class="grid-style">

				<div>
					<div class="box">
						<div class="content align-center">
							<header class="align-center">
								<p>採礦宗師</p>
								<h2><?php echo $採礦宗師 ?></h2>
							</header>
							<div class="image align-center" style="margin: 10%">
								<img style="width: 100%" src="https://minotar.net/armor/bust/<?php echo $採礦宗師 ?>/200.png" alt="" />
							</div>
							<footer class="align-center">
								<p> 採礦熟練度 <?php echo $採礦宗師v ?></p>
								<a  class="button alt" href="player.php?id=<?php echo $採礦宗師 ?>">查看玩家資料</a>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="content align-center">
							<header class="align-center">
								<p>伐木宗師</p>
								<h2><?php echo $伐木宗師 ?></h2>
							</header>
							<div class="image align-center" style="margin: 10%">
								<img style="width: 100%" src="https://minotar.net/armor/bust/<?php echo $伐木宗師 ?>/200.png" alt="" />
							</div>
							<footer class="align-center">
								<p> 伐木熟練度 <?php echo $伐木宗師v ?></p>
								<a class="button alt" href="player.php?id=<?php echo $伐木宗師 ?>">查看玩家資料</a>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="content align-center">
							<header class="align-center">
								<p>種植宗師</p>
								<h2><?php echo $種植宗師 ?></h2>
							</header>
							<div class="image align-center" style="margin: 10%">
								<img style="width: 100%" src="https://minotar.net/armor/bust/<?php echo $種植宗師 ?>/200.png" alt="" />
							</div>
							<footer class="align-center">
								<p> 種植熟練度 <?php echo $種植宗師v ?></p>
								<a class="button alt" href="player.php?id=<?php echo $種植宗師 ?>">查看玩家資料</a>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="content align-center">
							<header class="align-center">
								<p>釣魚宗師</p>
								<h2><?php echo $釣魚宗師 ?></h2>
							</header>
							<div class="image align-center" style="margin: 10%">
								<img style="width: 100%" src="https://minotar.net/armor/bust/<?php echo $釣魚宗師 ?>/200.png" alt="" />
							</div>
							<footer class="align-center">
								<p> 釣魚熟練度 <?php echo $釣魚宗師v ?></p>
								<a class="button alt" href="player.php?id=<?php echo $釣魚宗師 ?>">查看玩家資料</a>
							</footer>
						</div>
					</div>
				</div>
				<div>
					<div class="box">
						<div class="content align-center">
							<header class="align-center">
								<p>加工宗師</p>
								<h2><?php echo $加工宗師 ?></h2>
							</header>
							<div class="image align-center" style="margin: 10%">
								<img style="width: 100%" src="https://minotar.net/armor/bust/<?php echo $加工宗師 ?>/200.png" alt="" />
							</div>
							<footer class="align-center">
								<p> 加工熟練度 <?php echo $加工宗師v ?></p>
								<a class="button alt" href="player.php?id=<?php echo $加工宗師 ?>">查看玩家資料</a>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="content align-center">
							<header class="align-center">
								<p>貿易宗師</p>
								<h2><?php echo $貿易宗師 ?></h2>
							</header>
							<div class="image align-center" style="margin: 10%">
								<img style="width: 100%" src="https://minotar.net/armor/bust/<?php echo $貿易宗師 ?>/200.png" alt="" />
							</div>
							<footer class="align-center">
								<p> 貿易熟練度 <?php echo $貿易宗師v ?></p>
								<a class="button alt" href="player.php?id=<?php echo $貿易宗師 ?>">查看玩家資料</a>
							</footer>
						</div>
					</div>
				</div>
				<div>
					<div class="box">
						<div class="content align-center">
							<header class="align-center">
								<p>舞劍宗師</p>
								<h2><?php echo $舞劍宗師 ?></h2>
							</header>
							<div class="image align-center" style="margin: 10%">
								<img style="width: 100%" src="https://minotar.net/armor/bust/<?php echo $舞劍宗師 ?>/200.png" alt="" />
							</div>
							<footer class="align-center">
								<p> 舞劍熟練度 <?php echo $舞劍宗師v ?></p>
								<a class="button alt" href="player.php?id=<?php echo $舞劍宗師 ?>">查看玩家資料</a>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="content align-center">
							<header class="align-center">
								<p>狙擊宗師</p>
								<h2><?php echo $狙擊宗師 ?></h2>
							</header>
							<div class="image align-center" style="margin: 10%">
								<img style="width: 100%" src="https://minotar.net/armor/bust/<?php echo $狙擊宗師 ?>/200.png" alt="" />
							</div>
							<footer class="align-center">
								<p> 狙擊熟練度 <?php echo $狙擊宗師v ?></p>
								<a class="button alt" href="player.php?id=<?php echo $狙擊宗師 ?>">查看玩家資料</a>
							</footer>
						</div>
					</div>
				</div>

			</div>
			<p>懷疑數值有異常情形 ? 請到 <a href="https://ref.gamer.com.tw/redir.php?url=https%3A%2F%2Fdiscord.gg%2Fm4REaMa">Discord</a> 讓我們協助您處理</p>
		</div>
	</section>

	<!-- Two -->
	<section id="two" class="wrapper style3">
		<div class="inner">
			<header class="align-center">
				<p>伺服器狀態</p>
				<?php
				require_once('../minestat.php');
				$ms = new MineStat("localhost", 8701);
				if ($ms->is_online()) {
					printf("<h2 style=\"color: green\"> <i style=\"color: green\" class=\"material-icons\">cloud_done</i> 伺服器運行中</h2>共 %s 位玩家在線上<br>", $ms->get_current_players());
				} else {
					printf("<h2 style=\"color: red\"> <i style=\"color: red\" class=\"material-icons\">cloud_off</i> 伺服器維修中</h2><br>");
				}
				?>
			</header>
		</div>
	</section>

	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<!-- <ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul> -->
		</div>
		<div class="copyright">
			&copy; SMD Kingdoms 2019 . All rights reserved.
		</div>
	</footer>

	<script>
		$(document).ready(function() {
			$('.tooltipped').tooltip();
		});
		$('.tooltipped').mousedown(function() {
			$('.material-tooltip').css("z-index", "100");
		});
	</script>

	<!-- Scripts -->
	<script src="assets6/js/jquery.min.js"></script>
	<script src="assets6/js/jquery.scrollex.min.js"></script>
	<script src="assets6/js/skel.min.js"></script>
	<script src="assets6/js/util.js"></script>
	<script src="assets6/js/main.js"></script>
	<script type="text/javascript" src="js4/materialize.js"></script>

</body>

</html>