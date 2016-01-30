<!DOCTYPE html>
<html>
<head>
<?php
	require("../includes/head.php");
	echo getHead();?>
</head>
<body>

<div id="Wrapper">
	<!--Header-->
	<div class="HeaderBlock">
	<div class="LogoBlock">
		<img id="LogoPicture" src="Logo.jpg" ate="Dragnorth78" />
	</div>
	<!--連結-->
	<div class="NavBlock">
		<ul class="NavBlockMenu">
			<li id="Menu_Home">
				<a href="../../../../index.php" id="HomeLink">DGNT.HOME</a>
			</li>

			<li id="Menu_Blog">
				<a href="../page/blog.php" id="BlogLink">DGNT.Blog</a>
			</li>

			<li id="Menu_We">
				<a href="/" id="WeLink">DGNT.We</a>
			</li>

			<li id="Menu_Other">
				<a href="/" id="OtherLink">DGNT.Other</a>
			</li>
		</ul>
		<div></div>
	</div>
	</div>



<div id="Body">
	<?php
	require("../includes/body.php");
	echo getBlogBody();
	echo getBodyCenter();
	?>
</div>


<footer>
	<?php
	require("../includes/footer.php");
	echo getFooter();?>
</footer>



</body>
</html>
