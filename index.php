<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title> SMD : Kingdoms - 首頁</title>
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

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111762789-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-111762789-2');
	</script>

</head>

<body>

	<!-- Header -->
	<header id="header" class="alt">
		<div class="logo"><a href="index.php">SMD : Kingdoms <span>官網首頁</span></a></div>
		<a href="index.php">首頁</a>
		<a href="help.php?page=1">新手教學</a>
		<a href="law.php">社群規範</a>
		<a class="tooltipped" data-position="bottom" data-tooltip="製作中">線上地圖</a>
		<a href="donate.php">贊助伺服</a>
		<a href="photos.php">照片集錦</a>
		<a href="#menu"> 查看更多</a>

	</header>

	<nav id="menu">
		<ul class="links">
			<li><a href="master.php">熟練度排名</a></li>
			<li><a href="donateshop.php">加值商城</a></li>
			<li><a class="tooltipped" data-position="left" data-tooltip="製作中">伺服主介紹</a></li>
		</ul>
	</nav>

	<!-- Banner -->
	<section class="banner full">
		<article>
			<img src="images2/slide09.png" alt="" />
			<div class="inner">
				<header>
					<p>Minecraft Server</p>
					<h2>SMD : Kingdoms</h2>
				</header>
			</div>
		</article>
		<article>
			<img src="images2/slide05.png" alt="" />
			<div class="inner">
				<header>
					<p>Minecraft Server</p>
					<h2>SMD : Kingdoms</h2>
				</header>
			</div>
		</article>
		<article>
			<img src="images2/slide06.png" alt="" />
			<div class="inner">
				<header>
					<p>Minecraft Server</p>
					<h2>SMD : Kingdoms</h2>
				</header>
			</div>
		</article>
		<article>
			<img src="images2/slide02.png" alt="" />
			<div class="inner">
				<header>
					<p>Minecraft Server</p>
					<h2>SMD : Kingdoms</h2>
				</header>
			</div>
		</article>
		<article>
			<img src="images2/slide03.png" alt="" />
			<div class="inner">
				<header>
					<p>Minecraft Server</p>
					<h2>SMD : Kingdoms</h2>
				</header>
			</div>
		</article>
		<article>
			<img src="images2/slide04.png" alt="" />
			<div class="inner">
				<header>
					<p>Minecraft Server</p>
					<h2>SMD : Kingdoms</h2>
				</header>
			</div>
		</article>
		<article>
			<img src="images2/slide07.png" alt="" />
			<div class="inner">
				<header>
					<p>Minecraft Server</p>
					<h2>SMD : Kingdoms</h2>
				</header>
			</div>
		</article>
		<article>
			<img src="images2/slide08.png" alt="" />
			<div class="inner">
				<header>
					<p>Minecraft Server</p>
					<h2>SMD : Kingdoms</h2>
				</header>
			</div>
		</article>
		<article>
			<img src="images2/slide10.png" alt="" />
			<div class="inner">
				<header>
					<p>Minecraft Server</p>
					<h2>SMD : Kingdoms</h2>
				</header>
			</div>
		</article>
		<article>
			<img src="images2/slide11.png" alt="" />
			<div class="inner">
				<header>
					<p>Minecraft Server</p>
					<h2>SMD : Kingdoms</h2>
				</header>
			</div>
		</article>
		<article>
			<img src="images2/slide12.png" alt="" />
			<div class="inner">
				<header>
					<p>Minecraft Server</p>
					<h2>SMD : Kingdoms</h2>
				</header>
			</div>
		</article>
	</section>

	<!-- One -->
	<section id="one" class="wrapper style2">
		<div class="inner">

			<div>
				<div class="box">
					<div class="content" style="margin-left: 10%; margin-right: 10%; text-align:center;">

						<header class="align-center">
							<p>伺服器前三大家族排行榜</p>
							<h2>家族排行榜</h2>
						</header>
						<?php include("familylist.php") ?>
					</div>
				</div>

			</div>
			<div>
				<div class="box">
					<div class="content" style="margin-left: 10%; margin-right: 10%; text-align:center;">

						<header class="align-center">
							<p>伺服器前三大地主排行榜</p>
							<h2>擁有領地排行榜</h2>
						</header>
						<?php include("biggestregion.php") ?>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- One -->
	<section id="one" class="wrapper style2">
		<div class="inner">
			<div class="grid-style">

				<div>
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>伺服器特色系統使用教學</p>
								<h2>新手教學</h2>
							</header>
							<p style="text-align:center"> 伺服器擁有大量自製插件與系統，<br>查看使用教學以獲得最佳遊玩體驗!</p>
							<footer class="align-center">
								<a href="help.php?page=1.php" class="button alt">查看新手教學</a>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>為伺服器社群的成長貢獻一己之力</p>
								<h2>贊助伺服</h2>
							</header>
							<p style="text-align:center"> 架設及營運管理伺服器需耗費大量經費與精神， <br> 立即贊助伺服器給我們支持與鼓勵! </p>
							<footer class="align-center">
								<a href="donate.php" class="button alt">立即贊助伺服</a>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>伺服器玩家熟練度排行榜</p>
								<h2>宗師系統</h2>
							</header>
							<p style="text-align:center"> 伺服器某項熟練度最高的玩家將成為該職業的宗師，<br>快來看看你有沒有在排行榜內!</p>
							<footer class="align-center">
								<a href="master.php" class="button alt">查看熟練度排名</a>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<!-- <div class="image fit">
							<img src="images/pic03.jpg" alt="" />
						</div> -->
						<div class="content">
							<header class="align-center">
								<p>即時透過網頁查看伺服器地圖</p>
								<h2>線上地圖</h2>
							</header>
							<p style="text-align:center"> 透過網頁查看你的建築位在整張地圖的哪個方位， <br> 與鄰近的玩家交流並擴大建築規模! </p>
							<footer class="align-center">
								<a href="" class="button alt tooltipped" data-position="bottom" data-tooltip="日以繼夜趕工中 Q_Q">查看線上地圖</a>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>伺服器玩家的入口</p>
								<h2>巴哈姆特招生文</h2>
							</header>
							<p style="text-align:center"> 絕大多數玩家認識我們的管道，<br> 從這裡告訴大家我們有多好玩!</p>
							<footer class="align-center">
								<a href="https://forum.gamer.com.tw/C.php?bsn=18673&snA=176229&subbsn=18&page=1&gothis=908820#908820" class="button alt">前往招生文</a>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<!-- <div class="image fit">
							<img src="images/pic03.jpg" alt="" />
						</div> -->
						<div class="content">
							<header class="align-center">
								<p>查看別人有多厲害</p>
								<h2>線上查詢玩家資料</h2>
							</header>
							<p style="text-align:center"> 透過網頁查看其他玩家或自己的資料 </p>
							<footer class="align-center">
								<form action="player.php" method="get">
									<input type="text" name="id" placeholder="玩家 ID " />
									<input type="submit" />
								</form>
							</footer>
						</div>
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