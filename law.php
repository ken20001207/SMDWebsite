<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title> SMD : Kingdoms - 社群規範 <?php echo $id ?></title>
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
				<p>共同建立高水準玩家社群</p>
				<h2>社群規範</h2>
			</header>
		</div>
	</section>

	<!-- Two -->
	<section id="two" class="wrapper style2">
		<div class="inner">

			<div class="box">
				<div class="content">
					<h4>SMD:Kingdoms 社群規範</h4>
					<p>你好，感謝您選擇 SMD:Kingdoms 原味生存伺服器。<br> 在您進入遊戲前，請先詳閱本協議，若您不同意其中的內容，請您不要登入本伺服器。</p>
					<h5>1. 規章</h5>
					<p>伺服器由系統自動化規範玩家的行為，您不需要特別在意任何行為是否違反規章，違反的行為會被自動禁止及警告。</p>
					<p>透過系統漏洞進行非法行為的玩家不在上述限制，並依利用系統漏洞視情節處分。</p>
					<p>礙於技術問題，部分作弊模組暫時無法由系統自動限制，請您不要安裝下方 (第二點) 提到之模組進入伺服器。</p>
					<h5>2. 禁用模組</h5>
					<p>禁止使用能夠竄改送出之封包以達到原生客戶端無法做到的操作之模組，例如飛行、水上行走、超高速連點等模組。</p>
                    <p>禁止使用會造成伺服器公平性問題的模組，例如自動秒準、自動鎖定怪物、自動挖礦、透視挖礦等模組。</p>
                    <h5>3. 玩家義務</h5>
                    <p>您必須使用伺服器內的領地系統保護自己的財產避免遭到竊取或破壞。</p>
                    <p>您必須保持正向的遊戲態度，禁止向其他玩家有 "惡意" 攻擊行為及言語辱罵或故意破壞他人遊戲體驗。</p>
					<h5>4. 保留權力</h5>
					<p>上述本規範未提及之部分，伺服器保留最終決定權。</p>
					<p>伺服器保留對本規範內容修改之權力。</p>
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