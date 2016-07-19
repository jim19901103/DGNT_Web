<!-- 簡介及團台 -->
<div class="container">
<div class="row">
	<!--介紹-->
	<div class="col-xs-12 col-md-4">
		<br />
		<div>
			<font class="BriefIntroduction"><?=$data['BodyTopContents'];?></font><br />
			<font class="BriefIntroduction"><?=$data['BodyTopContents2'];?></font>
		</div>
	</div>

	<!-- 實況台 -->
	<div class="col-xs-12 col-md-8">
		<iframe id="Instructionframe" src=<?=$data['FrameLinkContents'];?> frameborder="0" allowfullscreen></iframe>
	</div>
</div>
</div>

<!--中間中層區塊1開始(可用於跑馬燈(各實況主的LINK))-->
<div class="container MiddleCenterBlock">
<!-- 前一頁/下一頁 -->
<div class="row">
	<span class="pre"><img src=<?=$data['MarqueePreButton'];?> /></span>
	<span class="next"><img src=<?=$data['MarqueeNextButton'];?> /></span>

	<a href=<?=$data['MarqueeLinkContent1'];?> class="first" target="_blank"><img src=<?=$data['MarqueePigContent1'];?> /></a>
	<a href=<?=$data['MarqueeLinkContent2'];?> target="_blank"><img src=<?=$data['MarqueePigContent2'];?> /></a>
	<a href=<?=$data['MarqueeLinkContent3'];?> target="_blank"><img src=<?=$data['MarqueePigContent3'];?> /></a>
	<a href=<?=$data['MarqueeLinkContent4'];?> target="_blank"><img src=<?=$data['MarqueePigContent4'];?> /></a>
</div>

<!-- 圓圈選擇區 -->
<div class="row">
	<div class="col-xs-12 col-xs-offset-4 col-md-12 col-md-offset-5 choose">
		<span class="red"></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
</div>
<!--中間中層區塊1結束-->

<!--中間中層區塊2開始(可用於招募相關、其他(左中右各一共三格))-->
<div class="container">
<div class="row MiddleCenterBlock2">
	<!-- Block1 -->
	<div class="col-xs-12 col-md-4 RelatedInformationBlock">
		<div class="row RelatedInformationBlockTitle">
			<p><?=$data['TeamStatusTitle'];?></p>
		</div>
		<hr />
		<div class="row RIBlock">
			<p><?=$data['TeamStatusContent'];?></p>
		</div>
	</div>
	<!-- Block2 -->
	<div class="col-xs-12 col-md-4 RelatedInformationBlock">
		<div class="row RelatedInformationBlockTitle">
			<p><?=$data['TeamRecruitingTitle'];?></p>
		</div>
		<hr />
		<div class="row RIBlock">
			<p id="TeamRecruitingContent"><?=$data['TeamRecruitingContent'];?></p>
		</div>
	</div>
	<!-- Block3 -->
	<div class="col-xs-12 col-md-4 RelatedInformationBlock">
		<div class="row ContactAndDouNatUs">
			<p><?=$data['ContactUsTitle'];?></p>
		</div>
		<div class="row ContactAndDouNatUsLinkBlock">
			<h4 style="color:black;">放圖片連結</h4>
		</div>
		<div class="row ContactAndDouNatUs">
			<p><?=$data['DouNatUsTitle'];?></p>
		</div>
		<div class="row ContactAndDouNatUsLinkBlock">
			<h4 style="color:black;">放圖片連結</h4>
		</div>
	</div>
</div>
</div>
<br />
<!--中間中層區塊2結束-->