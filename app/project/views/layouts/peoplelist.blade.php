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
			require_once("/../page/member.blade.php");
		?>

	</div>
	<footer class="row">
		<?php
			//require_once("/../includes/footer.php");
		?>
		<div class="print_var">
		<?php
			//echo "<pre>",print_r(get_defined_vars()),"</pre>";
		?>
		</div>
	</footer>

</div>
</body>
</html>