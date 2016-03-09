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
<div id="MiddleCenterBlock">
	<div class="MiddleCenterBlockFig"><a href=<?=$data['MarqueeLinkContent1'];?> target="_blank"><img src=<?=$data['MarqueePigContent1'];?> /></a></div>
	<div class="MiddleCenterBlockFig"><a href=<?=$data['MarqueeLinkContent2'];?> target="_blank"><img src=<?=$data['MarqueePigContent2'];?> /></a></div>
	<div class="MiddleCenterBlockFig"><a href=<?=$data['MarqueeLinkContent3'];?> target="_blank"><img src=<?=$data['MarqueePigContent3'];?> /></a></div>
	<div class="MiddleCenterBlockFig"><a href=<?=$data['MarqueeLinkContent4'];?> target="_blank"><img src=<?=$data['MarqueePigContent4'];?> /></a></div>
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
			<p><?=$data['ContactUsTitle'];?><span id="C1">>><span></p>
		</div>

		<div class="ContactUsLinkBlock">
			<ul class="SocialList">
		        <li><a id="FacebookLink" href=<?=$data['SocialLinkFB'];?> target="_blank"></a></li>
		    </ul>
		    <ul class="SocialList">
				<li><a id="TwitterLink" href=<?=$data['SocialLinkTr'];?> target="_blank"></a></li>
			</ul>
			<ul class="SocialList">
				<li><a id="InstagramLink" href=<?=$data['SocialLinkIg'];?> target="_blank"></a></li>
			</ul>
		</div>
 	</div>
 </div>
<!--中間中層區塊2結束-->

