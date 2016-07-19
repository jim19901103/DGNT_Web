<!DOCTYPE html>
<html>
<head>
<?php require_once("/../includes/head.php");?>
</head>
<body>
<div class="container">
	<header class="row">
		<?php require_once("/../includes/header.php");?>
	</header>

	<div id="main" class="row">
		<?php
		switch ($data['page']) {
			case 'home':
				require_once("/../page/home.blade.php");
				break;
			case 'blog':
				require_once("/../page/blog.blade.php");
				break;
			case 'member':
				require_once("/../page/member.blade.php");
				break;
			case 'liveviews':
				require_once("/../page/liveviews.blade.php");
				break;
			default:
				require_once("/../page/home.blade.php");
				break;}
		?>
	</div>

	<footer class="row">
		<?php
			require_once("/../includes/footer.php");
		?>
		<div class="print_var">
		<?php
			//echo "<pre>",print_r(get_defined_vars()),"</pre>";
		?>
		</div>
	</footer>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- jQuery (Bootstrap 所有外掛均需要使用) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
<script src="/../../../../public/JavaScript/bootstrap.min.js"></script>
</body>
</html>