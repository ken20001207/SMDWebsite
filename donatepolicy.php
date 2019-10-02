<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

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

			<div class="box">
				<div class="content">
					<h4>SMD:Kingdoms 玩家贊助協議</h4>
					<p>你好，感謝您願意幫助 SMD 玩家社群變得更好。<br> 在您贊助伺服器前，請先詳閱本協議，若您不同意其中的內容，請您不要提交贊助申請。</p>
					<h5>1. 贊助目的與用途</h5>
					<p>您的贊助目的必須是為了使 SMD:Kingdoms 伺服器在其營運期間內可以獲得更佳的營運水準，及使 SMD 玩家社群擁有更好的遊戲體驗。</p>
					<p>您的贊助金將會用於維持主機電費、網路費及添購硬體設備使用。伺服器承諾會公布其資金運用於官方網站及 Discord。</p>
					<h5>2. 贊助回饋</h5>
					<p>為了感謝玩家贊助，伺服器將給予玩家贊助金額 * 10% 的商城代幣作為回饋，可供玩家於加值商城購買裝飾性與功能性服務或道具。</p>
					<p>伺服器承諾加值商城所賣的道具與服務將不會影響遊戲公平性，即不會包含遊戲幣、等級、經驗值或熟練度。</p>
					<p>您獲得的回饋僅適用於 SMD:Kingdoms 伺服器內已規範之可使用範圍內使用，測試分流、活動分流或其他未明訂之範圍不在此限。</p>
					<p>伺服器僅給予商城幣之回饋至玩家帳號，並承諾不會無故移除，但仍保留對您帳號資料的處置權力。</p>
					<h5>3. 保留權力</h5>
					<p>上述本協議未提及之部分，伺服器保留最終決定權。</p>
					<p>伺服器保留對本協議內容修改之權力。</p>
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