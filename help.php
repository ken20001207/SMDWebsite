<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title> SMD : Kingdoms - 新手教學</title>
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
				<p>快速入門 SMD:Kingdoms 的操作</p>
				<h2>新手教學</h2>
			</header>
		</div>
	</section>

	<!-- Two -->
	<section id="two" class="wrapper style2">
		<div class="inner">
			<div class="align-center">

				<?php if ($_GET["page"] == 1) {
					echo "<div class=\"box\" style=\"width: 60%; min-width: 350px; display: inline-block\">";
					echo	"<div class=\"image fit\">";
					echo		"<img src=\"https://i.imgur.com/KCchlqB.gif\" />";
					echo	"</div>";
					echo	"<div class=\"content\">";
					echo		"<header class=\"align-center\">";
					echo			"<h2>使用手機快捷選單</h2>";
					echo		"</header>";
					echo		"<div style=\"margin-top: 30px\">";
					echo			"<p>您可以透過按下背包的合成表右邊欄位開啟手機，裡面有許多方便的功能可以使用。</p>";
					echo		"</div>";
					echo	"</div>";
					echo "</div>";
				} ?>

				<?php if ($_GET["page"] == 2) {
					echo "<div class=\"box\" style=\"width: 60%; min-width: 350px; display: inline-block\">";
					echo	"<div class=\"image fit\">";
					echo		"<img src=\"https://i.imgur.com/wHXTpqG.gif\" />";
					echo	"</div>";
					echo	"<div class=\"content\">";
					echo		"<header class=\"align-center\">";
					echo			"<h2>使用伺服器公共交易所</h2>";
					echo		"</header>";
					echo		"<div style=\"margin-top: 30px\">";
					echo			"<p>您可以透過右鍵點擊交易所大臣 NPC 來販賣手上的物品，<br>或是空手點擊來開啟交易所介面。</p>";
					echo		"</div>";
					echo	"</div>";
					echo "</div>";
				} ?>

				<?php if ($_GET["page"] == 3) {
					echo "<div class=\"box\" style=\"width: 60%; min-width: 350px; display: inline-block\">";
					echo	"<div class=\"image fit\">";
					echo		"<img src=\"https://i.imgur.com/ulQjCrs.gif\" />";
					echo	"</div>";
					echo	"<div class=\"content\">";
					echo		"<header class=\"align-center\">";
					echo			"<h2>設置家</h2>";
					echo		"</header>";
					echo		"<div style=\"margin-top: 30px\">";
					echo			"<p>您可以透過右鍵點擊床來設置家，<br>設置後可以透過手機傳送回家。</p>";
					echo		"</div>";
					echo	"</div>";
					echo "</div>";
				} ?>

				<?php if ($_GET["page"] == 4) {
					echo "<div class=\"box\" style=\"width: 60%; min-width: 350px; display: inline-block\">";
					echo	"<div class=\"image fit\">";
					echo		"<img src=\"https://i.imgur.com/nACDOp9.gif\" />";
					echo	"</div>";
					echo	"<div class=\"content\">";
					echo		"<header class=\"align-center\">";
					echo			"<h2>領地設定</h2>";
					echo		"</header>";
					echo		"<div style=\"margin-top: 30px\">";
					echo			"<p>您可以透過右鍵點擊領地旗幟來查看領地資訊以及編輯領地權限設定。</p>";
					echo		"</div>";
					echo	"</div>";
					echo "</div>";
				} ?>

				<?php if ($_GET["page"] == 5) {
					echo "<div class=\"box\" style=\"width: 60%; min-width: 350px; display: inline-block\">";
					echo	"<div class=\"image fit\">";
					echo		"<img src=\"https://i.imgur.com/SwkvCLx.gif\" />";
					echo	"</div>";
					echo	"<div class=\"content\">";
					echo		"<header class=\"align-center\">";
					echo			"<h2>增加領地身分組</h2>";
					echo		"</header>";
					echo		"<div style=\"margin-top: 30px\">";
					echo			"<p>領地的權限是以身分組為單位進行管理的，<br>您可以透過右鍵點擊領地旗幟後點擊增加身分組，<br>來為您的領地權限添加一個身分組。</p>";
					echo		"</div>";
					echo	"</div>";
					echo "</div>";
				} ?>

				<?php if ($_GET["page"] == 6) {
					echo "<div class=\"box\" style=\"width: 60%; min-width: 350px; display: inline-block\">";
					echo	"<div class=\"image fit\">";
					echo		"<img src=\"https://i.imgur.com/hQiu6vd.gif\" />";
					echo	"</div>";
					echo	"<div class=\"content\">";
					echo		"<header class=\"align-center\">";
					echo			"<h2>設置領地身分組的權限</h2>";
					echo		"</header>";
					echo		"<div style=\"margin-top: 30px\">";
					echo			"<p>您可以透過右鍵點擊領地旗幟並選擇特定的身分組進行權限設定，<br>可以設定特定身分組是否能進入領地、建造方塊、破壞方塊、使用容器以及領地傳送。</p>";
					echo		"</div>";
					echo	"</div>";
					echo "</div>";
				} ?>

				<?php if ($_GET["page"] == 7) {
					echo "<div class=\"box\" style=\"width: 60%; min-width: 350px; display: inline-block\">";
					echo	"<div class=\"image fit\">";
					echo		"<img src=\"https://i.imgur.com/Z67z3Kc.gif\" />";
					echo	"</div>";
					echo	"<div class=\"content\">";
					echo		"<header class=\"align-center\">";
					echo			"<h2>設定文字聊天頻道</h2>";
					echo		"</header>";
					echo		"<div style=\"margin-top: 30px\">";
					echo			"<p>您可以透過手機開啟文字聊天頻道選單，<br>設定開啟與關閉的文字聊天頻道。<br><br>在文字前端加上驚嘆號可以在分流頻道內發言，<br>加上井字號可以在家族頻道內發言。</p>";
					echo		"</div>";
					echo	"</div>";
					echo "</div>";
				} ?>

				<?php if ($_GET["page"] == 8) {
					echo "<div class=\"box\" style=\"width: 60%; min-width: 350px; display: inline-block\">";
					echo	"<div class=\"image fit\">";
					echo		"<img src=\"https://i.imgur.com/JSXh2X8.gif\" />";
					echo	"</div>";
					echo	"<div class=\"content\">";
					echo		"<header class=\"align-center\">";
					echo			"<h2>為特殊附魔的物品充能</h2>";
					echo		"</header>";
					echo		"<div style=\"margin-top: 30px\">";
					echo			"<p>附有特殊附魔的工具需要有足夠的能量才能發揮作用，<br>職業是工匠的玩家可以為道具進行充能。<br><br>在界伏盒內放入要拿來充能的物品 (農作物或木材) ，<br>手持界伏盒右鍵點擊 \"充能熔爐\" 再將物品放入上方即可開始充能。</p>";
					echo		"</div>";
					echo	"</div>";
					echo "</div>";
				} ?>

				<div class="box" style="width: 60%; min-width: 350px; display: inline-block">
					<div class="content">
						<h4>其他教學</h4>
						<ul class="alt">
							<li><a href="help.php?page=1" <?php if ($_GET["page"] == 1) echo "style=\"color: gray\""; ?>>使用手機快捷選單<a></li>
							<li><a href="help.php?page=2" <?php if ($_GET["page"] == 2) echo "style=\"color: gray\""; ?>>使用伺服器公共交易所<a></li>
							<li><a href="help.php?page=3" <?php if ($_GET["page"] == 3) echo "style=\"color: gray\""; ?>>設置家<a></li>
							<li><a href="help.php?page=4" <?php if ($_GET["page"] == 4) echo "style=\"color: gray\""; ?>>領地設定<a></li>
							<li><a href="help.php?page=5" <?php if ($_GET["page"] == 5) echo "style=\"color: gray\""; ?>>增加領地身分組<a></li>
							<li><a href="help.php?page=6" <?php if ($_GET["page"] == 6) echo "style=\"color: gray\""; ?>>設置領地身分組的權限<a></li>
							<li><a href="help.php?page=7" <?php if ($_GET["page"] == 7) echo "style=\"color: gray\""; ?>>設定文字聊天頻道<a></li>
							<li><a href="help.php?page=8" <?php if ($_GET["page"] == 8) echo "style=\"color: gray\""; ?>>為特殊附魔的物品充能<a></li>
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