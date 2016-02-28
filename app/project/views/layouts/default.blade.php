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
				case 'we':
					require_once("/../page/we.blade.php");
					break;
				case 'other':
					require_once("/../page/other.blade.php");
					break;
				default:
					//
					break;
			}
		?>

		<?//=$data['contents'];?>


		<?php
		//q! 改用MVC
		// require_once("/../includes/body.php");
		// require_once("/../page/blog.php");
		// require_once("/../page/home.php");
		// try {
		// 		if (! isset($_GET["Id"])) {
		// 			throw new Exception("Vaule is not be set");
		// 		}
		// }
		// catch (Exception $e) {
		// 	//echo "Message : " . $e->getMessage();
		// }

		// if (isset($_GET["Id"])) {
		// 	$id = $_GET["Id"];
		// 	if ($id == "Home") {
		// 		echo getBodyTop();
		// 	}
		// 	else if ($id == "Blog") {
		// 		echo getBlogBody();
		// 	}
		// 	else{
		// 		echo getBodyTop();
		// 	}
		// }
		// else {
		// 	echo getBodyTop();
		// }

		// echo getBodyCenter();
		?>
	</div>
	<footer class="row">
		<?php
		//q! 注意排版
			require_once("/../includes/footer.php");
		?>
		<div class="print_var">
		<?php 
			//q! 有PHP的內容 不能只用HTML的註解<!-- -->
			//echo "<pre>",print_r(get_defined_vars()),"</pre>"; 
		?>
		</div>
	</footer>

</div>
</body>
</html>