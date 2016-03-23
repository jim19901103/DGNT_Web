<!-- 跑馬燈效果 -->
<script type="text/javascript">
jQuery(document).ready(function() {
  /*定義兩個變量，保存當前頁碼和上一頁頁碼*/
  var $index=0;
  var $exdex=0;

  /*圓圈滑鼠按下事件，觸發圖片左移或右移*/
  $(".choose span").click(function(){
  //取得目前移入的index值
  $index=$(this).index();
  //圓圈的颜色变化，表示目前選到的
  $(".choose span").eq($index).addClass("red").siblings().removeClass("red");
  //如果index變小，代表圖片要往左移動。變大則為右移
  if( $index > $exdex ){
    next();
  } else if( $index < $exdex ){
    pre();
  }
  //移動完後將目前index值替換成前頁index
  return $exdex = $index;
  });

  //下一頁的點擊事件,右移時並判斷最大index值
  $(".next").click(function(){
  $index++;
  if( $index > 3 ){
    $index = 0;
  }
  $(".choose span").eq($index).addClass("red").siblings().removeClass("red");
  next();
  return $exdex = $index;
  });

  //上一頁的點擊事件
  $(".pre").click(function(){
  $index--;
  if( $index < 0 ){
    $index = 3;
  }
  $(".choose span").eq($index).addClass("red").siblings().removeClass("red");
  pre();
  return $exdex = $index;
  });

  //加入定時，輪播幻燈片
  var atime=setInterval(function(){
    $(".next").click();
  },8000);

  //右移-先讓exdex定位的left左移百分百，而選到的當前頁從螢幕右邊移入,left變為0
  function next(){
     $(".MiddleCenterBlock a").eq($index).stop(true,true).
             css("left","100%").animate({"left":"0"});
     $(".MiddleCenterBlock a").eq($exdex).stop(true,true).
             css("left","0").animate({"left":"-100%"});
  }
  //左移
  function pre(){
     $(".MiddleCenterBlock a").eq($index).stop(true,true).
         css("left","-100%").animate({"left":"0"});
     $(".MiddleCenterBlock a").eq($exdex).stop(true,true).
         css("left","0").animate({"left":"100%"});
  }
});</script>
<!-- 跑馬燈效果結束 -->

<!-- FB物件右邊滑動 -->
<script type="text/javascript">
  jQuery(document).ready(function() {
  jQuery(".FbBox").hover(function() {
  jQuery(this).stop().animate({right: "0"}, "medium");}, function() {
  jQuery(this).stop().animate({right: "-333"}, "medium");}, 500);});
</script>

<!-- FB的外掛連結-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



