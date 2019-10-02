<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<?php

include("mysqlsettings.php");

$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'donate');
if ($conn->connect_errno) {
	printf("Connect failed: %s\n", $conn->connect_error);
	exit();
}
$result = $conn->query("DELETE FROM `data` WHERE `RtnMsg`='paid';")
	or trigger_error($conn->error);

?>

<head>
	<title> SMD : Kingdoms - 贊助伺服 <?php echo $id ?></title>
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
				<p>給予 SMD:Kingdoms 支持</p>
				<h2>贊助伺服</h2>
			</header>
		</div>
	</section>

	<!-- Two -->
	<section id="two" class="wrapper style2">
		<div class="inner">
			<div class="align-center">

				<div class="box" style="width: 60%; min-width: 350px; display: inline-block">
					<div class="content">
						<h4>架設及營運維護伺服器需要耗費大量的經費及精力，<br> 我們歡迎有能力的玩家與我們一起打造更理想的遊戲環境!</h4>
						<p>作為回報，在您完成付款的 5 ~ 10 分鐘內，我們將發送商城幣至您的遊戲帳號。</p>
					</div>
				</div>

				<div class="box" style="width: 60%; min-width: 350px; display: inline-block">
					<div class="image fit">
						<img src="https://cdn.dribbble.com/users/2372876/screenshots/4808096/server2.png" alt="" />
					</div>
					<div class="content">
						<header class="align-center">
							<h2>贊助伺服</h2>
						</header>
						<div style="margin-top: 30px">
							<form action="payment/create.php" method="POST">
								<input type="text" name="player" placeholder=" 玩家 ID (例: ken20001207 ) 需正確才能發送商城幣" required />
								<input type="text" name="price" placeholder=" 贊助金額 (例: 150 ) 單位為 NT$ 新台幣" required />
								<p style="margin-top: 30px">按下提交後代表您認同本伺服器的<a href="donatepolicy.php"> SMD:Kingdoms 玩家贊助協議 </a> <br> 建議您記下產生的訂單號碼，若發生問題可方便查詢。</p>
								<input type="submit" />
							</form>
						</div>
					</div>
				</div>

				<div class="box" style="width: 60%; min-width: 350px; display: inline-block">
					<div class="content">
						<header class="align-center">
							<h2>歷史贊助 (單筆)</h2>
						</header>
						<div style="margin-top: 30px">
							<ul>
								<?php include("donatehistory.php"); ?>
							</ul>
						</div>
					</div>
				</div>

				<div class="box" style="width: 60%; min-width: 350px; display: inline-block">
					<div class="content">
						<header class="align-center">
							<h2>歷史贊助 (玩家)</h2>
						</header>
						<div style="margin-top: 30px">
							<ul>
								<?php include("donatesumhistory.php"); ?>
							</ul>
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