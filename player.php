<?php

include("mysqlsettings.php");

$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'mcserver');
if ($conn->connect_errno) {
	echo "<script>alert(\"與伺服器資料庫連線失敗，請通知管理員。\");window.location.replace(\"http://yuanyuan.cloud/smd\");</script>";
	exit();
}
$result = $conn->query("SELECT * FROM `userdata` WHERE `id`='" . $_GET["id"] . "';")
	or die(mysql_error());
if (mysqli_num_rows($result) == 0) echo "<script>alert(\"查無玩家資料!\");window.location.replace(\"http://yuanyuan.cloud/smd/\");</script>";
else {
	$row = mysqli_fetch_assoc($result);
	$id = $row["id"];
	$uuid = $row["uuid"];
	$lastlogin = $row["lastlogindate"];
	$balance = $row["balance"];
	$cla = $row["class"];
	$displaycla = $row["displaycla"];
	$level = $row["level"];
	$exp = $row["exp"];
	$family = $row["family"];
	$coin = $row["coin"];
	$fly = $row["fly"];

	$iron = $row["iron"];
	$ripe = $row["ripe"];
	$magic = $row["magic"];
	$sword = $row["sword"];
	$bow = $row["bow"];
	$wood = $row["wood"];
	$fish = $row["fish"];
	$trade = $row["trade"];
}
?>


<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title> SMD : Kingdoms - 玩家資料 <?php echo $id ?></title>
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
				<p>玩家資料</p>
				<h2><?php echo $id ?></h2>
			</header>
		</div>
	</section>

	<!-- Two -->
	<section id="two" class="wrapper style2">
		<div class="inner">
			<div class="box">
				<div class="content">
					<header class="align-center">
						<p>由於資料是登出時上傳，您看到的資料不一定是準確數值。</p>
					</header>
					<div class="row" style="margin-top: 30px">
						<div class="6u">
							<div class="image align-center" style="margin: 10%">
								<img style="width: 100%" src="https://minotar.net/armor/bust/<?php echo $id ?>/300.png" alt="" />
							</div>
							<div class="table-wrapper">
									<table class="alt">
										<tbody>
											<tr>
												<td>採礦熟練度</td>
												<td><?php echo $iron ?> 點</td>
											</tr>
											<tr>
												<td>伐木熟練度</td>
												<td><?php echo $wood ?> 點</td>
											</tr>
											<tr>
												<td>釣魚熟練度</td>
												<td><?php echo $fish ?> 點</td>
											</tr>
											<tr>
												<td>種植熟練度</td>
												<td><?php echo $ripe ?> 點</td>
											</tr>
											<tr>
												<td>舞劍熟練度</td>
												<td><?php echo $sword ?> 點</td>
											</tr>
											<tr>
												<td>狙擊熟練度</td>
												<td><?php echo $bow ?> 點</td>
											</tr>
											<tr>
												<td>加工熟練度</td>
												<td><?php echo $magic ?> 點</td>
											</tr>
											<tr>
												<td>貿易熟練度</td>
												<td><?php echo $trade ?> 點</td>
											</tr>
										</tbody>
									</table>
								</div>
						</div>
						<div class="6u">
							<dl>
								<dt>玩家名稱 ID</dt>
								<dd>
									<p><?php echo $id ?></p>
								</dd>
								<dt>上次登入時間 Last login</dt>
								<dd>
									<p><?php echo $lastlogin ?></p>
								</dd>
								<dt>家族 Family</dt>
								<dd>
									<?php if ($family == "null") echo "<p> 沒有家族 </p>";
									else echo "<p> 家族 " . $family . " </p>";
									?>
								</dd>
								<dt>識別碼 Unique ID</dt>
								<dd>
									<p><?php echo $uuid ?></p>
								</dd>
								<dt>稱號 Display Class</dt>
								<dd>
									<p><?php echo $displaycla ?></p>
								</dd>
								<dt>擁有的身分 Classes</dt>
								<dd>
									<?php
									$clas = explode(",", $cla);
									for ($i = 0; $i < sizeof($clas); $i++) {
										echo "<p> - " . $clas[$i] . "</p>";
									}
									?>
								</dd>
								<dt>餘額 Balance</dt>
								<dd>
									<p><?php echo $balance ?> 元</p>
								</dd>
								<dt>商城幣 Coin</dt>
								<dd>
									<p><?php echo $coin ?> 元</p>
								</dd>
								<dt>領地飛行時數 Fly point</dt>
								<dd>
									<p><?php echo $fly ?> 秒</p>
								</dd>
							</dl>
						</div>
					</div>
				</div>
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