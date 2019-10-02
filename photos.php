<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title> SMD : Kingdoms - 照片集錦</title>
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
                <p>伺服器內的優美風光</p>
                <h2>照片集錦</h2>
            </header>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style2">
        <div class="inner">
            <div class="align-center">

                <widgetbot server="593342542624456725" channel="602853937258823693" shard="https://disweb.deploys.io" width="100%" height="1000"></widgetbot>
                <script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed" async defer></script>

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