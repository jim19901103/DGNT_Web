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
					//
					break;
			}?>
	</div>

	<!-- FB Link To Web's Right -->
	<div class="FbBox">
	<div>
		<div id="fb-root"></div>
		<div class="fb-page" data-href="https://www.facebook.com/Dragnorth-Workshop-1024409334293029/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
	</div>
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
</body>
</html>