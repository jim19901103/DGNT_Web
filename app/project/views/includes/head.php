<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="JyunWei Lin">
<link rel="stylesheet" type="text/css" href="/../../../../public/CSS/DGNT.css">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="/../../../../public/JavaScript/Cycle/jquery.cycle.all.js"></script>

<!-- 投影片 -->
<script type="text/javascript">
jQuery(document).ready(function($) {
$('#MiddleCenterBlock').cycle({
      fx:    'scrollLeft',
      timeout:  4200,
      random:  1
     });
	}); </script>
<title>Dragnorth's Page</title>

<!-- 物件右邊滑動 -->
<script type="text/javascript">
jQuery(document).ready(function() {
jQuery(".FbBox").hover(function() {
jQuery(this).stop().animate({right: "0"}, "medium");}, function() {
jQuery(this).stop().animate({right: "-333"}, "medium");}, 500);});
</script>

<!-- FB的外掛連結 -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>