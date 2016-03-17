<!--中間上層區塊開始-->
<div class="MiddleTopBlock">
	<div class="Left_NavBlock">
		<div class="BriefIntroduction">
		<!--介紹-->
		<font><?=$data['BodyTopContents'];?></font>
		</div>
	</div>
	<!--src後面+video:只嵌入影片；src後面+chatroom:只嵌入聊天頻道-->
	<div class="Right_ProfileBlock">
		<div><iframe id="Instructionframe" src=<?=$data['FrameLinkContents'];?> frameborder="0" allowfullscreen></iframe></div>
	</div>
</div>
<!--中間上層區塊結束-->

<!--中間中層區塊1開始(可用於跑馬燈(各實況主的LINK))-->
<div class="MiddleCenterBlock">
	<!-- 前一頁/下一頁 -->
	<span class="pre"><img src=<?=$data['MarqueePreButton'];?> /></span>
	<span class="next"><img src=<?=$data['MarqueeNextButton'];?> /></span>

	<a href=<?=$data['MarqueeLinkContent1'];?> class="first" target="_blank"><img src=<?=$data['MarqueePigContent1'];?> /></a>
	<a href=<?=$data['MarqueeLinkContent2'];?> target="_blank"><img src=<?=$data['MarqueePigContent2'];?> /></a>
	<a href=<?=$data['MarqueeLinkContent3'];?> target="_blank"><img src=<?=$data['MarqueePigContent3'];?> /></a>
	<a href=<?=$data['MarqueeLinkContent4'];?> target="_blank"><img src=<?=$data['MarqueePigContent4'];?> /></a>

	<!-- 圓圈選擇區 -->
	<div class="choose">
	<span class="red"></span>
	<span></span>
	<span></span>
	<span></span>
	</div>
</div>
<!--中間中層區塊1結束-->

<!--中間中層區塊2開始(可用於招募相關、其他(左中右各一共三格))-->
 <div class="MiddleCenterBlock2">
 	<div id="RelatedInformationBlock1">
 		<p id="TeamStatusTitle"><?=$data['TeamStatusTitle'];?></p>
 	</div>
 	<div id="RelatedInformationBlock2">
 		<p id="TeamRecruitingTitle"><?=$data['TeamRecruitingTitle'];?></p>
 		<hr />
		<p id="TeamRecruitingContent"><?=$data['TeamRecruitingContent'];?></p>
 	</div>
 	<div id="RelatedInformationBlock3">
		<div id="ContactUs">
			<p><?=$data['ContactUsTitle'];?></p>
		</div>

		<div class="ContactUsLinkBlock">
			<h4 style="color:white;">放圖片連結</h4>
		</div>

		<div id="DouNatUs">
			<p><?=$data['ContactUsTitle'];?></p>
		</div>

		<div class="DouNatUsLinkBlock">
			<h4 style="color:white;">放圖片連結</h4>
		</div>
 	</div>
 </div>
<!--中間中層區塊2結束-->

