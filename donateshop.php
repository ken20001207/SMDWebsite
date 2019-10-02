<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title> SMD : Kingdoms - 加值商城</title>
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

	<!-- 上方浮動導航欄 & 右方展開導覽列 -->
    <?php require "echonav.php";?>

	<section id="One" class="wrapper style3">
		<div class="inner">
			<header class="align-center">
				<h2>加值商城</h2>
			</header>
		</div>
	</section>

	<!-- One -->
	<section id="one" class="wrapper style2">
		<div class="inner">
			<div class="grid-style">

				<div>
					<div class="box">
						<div class="image fit">
							<img src="images2/飛行.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>領地飛行時數</h2>
								<p>每小時 15 商城幣</p>
							</header>
							<p style="text-align:center"> 購買足夠的領地飛行時數，<br>蓋大型建築必備!</p>
							<footer class="align-center">
								<form action="donateshop/fly.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="text" name="amount" placeholder="幾個小時 (請輸入正整數)" required />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="images2/領地.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>領地數量擴充</h2>
								<p>每塊 40 商城幣</p>
							</header>
							<p style="text-align:center"> 四塊領地不夠用嗎? <br>多買幾塊吧!</p>
							<footer class="align-center">
								<form action="donateshop/region.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="text" name="amount" placeholder="幾塊 (請輸入正整數)" required />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="images2/白色.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>白色對話訊息色彩</h2>
								<p>10 商城幣</p>
							</header>
							<p style="text-align:center"> 可以將自己的對話訊息改為白色，<br>刷一波存在感!</p>
							<footer class="align-center">
								<form action="donateshop/chatcolor.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="hidden" name="color" value="f" />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="images2/淺綠色.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>淺綠色對話訊息色彩</h2>
								<p>30 商城幣</p>
							</header>
							<p style="text-align:center"> 可以將自己的對話訊息改為淺綠色，<br>刷一波存在感!</p>
							<footer class="align-center">
								<form action="donateshop/chatcolor.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="hidden" name="color" value="a" />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="images2/深綠色.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>深綠色對話訊息色彩</h2>
								<p>25 商城幣</p>
							</header>
							<p style="text-align:center"> 可以將自己的對話訊息改為深綠色，<br>刷一波存在感!</p>
							<footer class="align-center">
								<form action="donateshop/chatcolor.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="hidden" name="color" value="2" />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="images2/藍色.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>藍色對話訊息色彩</h2>
								<p>25 商城幣</p>
							</header>
							<p style="text-align:center"> 可以將自己的對話訊息改為藍色，<br>刷一波存在感!</p>
							<footer class="align-center">
								<form action="donateshop/chatcolor.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="hidden" name="color" value="9" />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="images2/水藍.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>水藍色對話訊息色彩</h2>
								<p>30 商城幣</p>
							</header>
							<p style="text-align:center"> 可以將自己的對話訊息改為水藍色，<br>刷一波存在感!</p>
							<footer class="align-center">
								<form action="donateshop/chatcolor.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="hidden" name="color" value="b" />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="images2/深水藍.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>深水藍色對話訊息色彩</h2>
								<p>25 商城幣</p>
							</header>
							<p style="text-align:center"> 可以將自己的對話訊息改為深水藍色色，<br>刷一波存在感!</p>
							<footer class="align-center">
								<form action="donateshop/chatcolor.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="hidden" name="color" value="3" />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="images2/橘色.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>橘色對話訊息色彩</h2>
								<p>30 商城幣</p>
							</header>
							<p style="text-align:center"> 可以將自己的對話訊息改為橘色，<br>刷一波存在感!</p>
							<footer class="align-center">
								<form action="donateshop/chatcolor.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="hidden" name="color" value="6" />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="images2/黃色.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>黃色對話訊息色彩</h2>
								<p>35 商城幣</p>
							</header>
							<p style="text-align:center"> 可以將自己的對話訊息改為黃色，<br>刷一波存在感!</p>
							<footer class="align-center">
								<form action="donateshop/chatcolor.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="hidden" name="color" value="e" />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="images2/粉色.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>粉色對話訊息色彩</h2>
								<p>35 商城幣</p>
							</header>
							<p style="text-align:center"> 可以將自己的對話訊息改為粉色，<br>刷一波存在感!</p>
							<footer class="align-center">
								<form action="donateshop/chatcolor.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="hidden" name="color" value="d" />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="https://i.imgur.com/W5dATYr.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>自訂暱稱</h2>
								<p><del>100</del> 75 商城幣</p>
							</header>
							<p style="text-align:center"> 可以將自己的顯示暱稱改為自訂的文字，<br>支援中文喔!</p>
							<footer class="align-center">
								<form action="donateshop/nickname.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="text" name="nickname" placeholder="自訂暱稱" required />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="https://i.imgur.com/yX7Oqm3.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>火焰環繞粒子特效</h2>
								<p><del>45</del> 35 商城幣</p>
							</header>
							<p style="text-align:center"> 如動圖示範，<br>酷炫的火焰粒子會在你身邊環繞。</p>
							<footer class="align-center">
								<form action="donateshop/flamerings.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit">
							<img src="https://i.imgur.com/DxwUHOR.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>客製化顏色 粉塵尾流粒子特效</h2>
								<p>30 商城幣</p>
							</header>
							<p style="text-align:center"> 如動圖示範，<br>您走路的時候會有酷炫的粉塵粒子軌跡 (顏色可自訂)。</p>
							<footer class="align-center">
								<form action="donateshop/redstone.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="text" name="r" placeholder="紅色 (0~255)" required />
									<input type="text" name="g" placeholder="綠色 (0~255)" required />
									<input type="text" name="b" placeholder="藍色 (0~255)" required />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>
				<div>
					<div class="box">
						<div class="image fit">
							<img src="https://i.imgur.com/dNSSIKs.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>客製化顏色 粉塵環繞粒子特效</h2>
								<p>35 商城幣</p>
							</header>
							<p style="text-align:center"> 如動圖示範，<br>酷炫的粉塵粒子會在您身邊環繞 (顏色可自訂)。</p>
							<footer class="align-center">
								<form action="donateshop/redstonerings.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="text" name="r" placeholder="紅色 (0~255)" required />
									<input type="text" name="g" placeholder="綠色 (0~255)" required />
									<input type="text" name="b" placeholder="藍色 (0~255)" required />
									<input type="submit" />
								</form>
							</footer>
						</div>
					</div>
				</div>
				<div>
					<div class="box">
						<div class="image fit">
							<img src="https://i.imgur.com/TWx63FO.png" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>火焰尾流粒子特效</h2>
								<p>40 商城幣</p>
							</header>
							<p style="text-align:center"> 如動圖示範，<br>您走路時會有酷炫的火焰粒子軌跡。</p>
							<footer class="align-center">
								<form action="donateshop/flame.php" method="POST">
									<input type="text" name="id" placeholder="玩家 ID " required />
									<input type="submit" />
								</form>
							</footer>
						</div>
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