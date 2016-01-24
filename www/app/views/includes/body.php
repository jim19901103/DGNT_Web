<?php
function getBodyTop(){
$body1 = <<<EOF
	<!--中間上層區塊開始-->
		<div class="MiddleTopBlock">
			<div class="Left_NavBlock">
				<img id="InstructionPicture" src="Instruction.jpg" 
				ate="DGNT_Instruction" />
			</div>

			<div class="Right_ProfileBlock">
				<div class="BriefIntroduction">
					<font>嗨！我們是【Dragnorth Workshop】龍北工作室，我們是個正在起步的團隊，致力於分享遊戲與生活的喜悅給漫遊在網路上的人們。<br />我們工作室，是以招募各方各界對實況圈有喜好的朋友，以互聯互助的形式，彙整成類似「聯播網」，讓來到我們工作室的朋友們可以看到各種直播節目，接收最新訊息，一起同樂！</font>
				</div>
			</div>
		</div>
	<!--中間上層區塊結束-->
EOF;
return $body1;
}
?>

<?php
function getBodyCenter(){
$body2 = <<<EOF
		<!--中間中層區塊1開始(可用於跑馬燈(各實況主的LINK))-->
		<div class="MiddleCenterBlock">
		</div>
		<!--中間中層區塊1結束-->

		<!--中間中層區塊2開始(可用於招募相關、其他(左右各一共兩格))-->
		<div class="MiddleCenterBlock2">
			<table class="RecruitOrOtherTable" rules="none">
				<thead>
					<tr>
						<th class="TheadContent">Our Story</th>
						<th class="TheadContent"></th>
					</tr>	
				</thead>

				<tobdy>
					<tr>					
						<td><img class="TableContentPicture" 
							src="dgnt2.jpg" alt="dgnt" /></td>
						
						<td>DGNT Workshop持續招募喜愛實況、喜歡繪圖、想學習團隊事務的朋友，一起加入我們的行列，與我們共事並一起慢慢成長！有興趣的朋友請點以下按鈕進入了解詳情吧！</td>
					</tr>

					<tr>					
						<td class="TableButton"><button type="button">了解詳情</button></td>
						<td class="TableButton"></td>
					</tr>
				</tbody>
			</table>

			<table class="RecruitOrOtherTable2" rules="none">
				<thead>
					<tr>
						<th class="TheadContent">The Other</th>
						<th class="TheadContent"></th>
					</tr>	
				</thead>

				<tobdy>
					<tr>					
						<td><img class="TableContentPicture" 
							src="dgnt2.jpg" alt="dgnt" /></td>
						<td>DGNT Workshop持續招募喜愛實況、喜歡繪圖、想學習團隊事務的朋友，一起加入我們的行列，與我們共事並一起慢慢成長！有興趣的朋友請點以下按鈕進入了解詳情吧！</td>
					</tr>

					<tr>					
						<td class="TableButton"><button type="button">Other</button></td>
						<td class="TableButton"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!--中間中層區塊2結束-->
		
		
		<!--中間下層區塊開始(可用於事件歷程近況等)-->
		<div class="MiddleBottomBlock">
			<div class="HistoryRecordTitleBlock">
				<h3 id="RecordOfHistory">History<br />Record</h3>
				<p id="ParagraphDescription">Join our on Twitter and Livehourse.</p>
				<a href="file:///C:/Users/Cat/Desktop/newfolder/WebLayout/WebLayout_1.html" id="FollowLink">Follow Us<span id="F1"> >><span></a>
			</div>

			<div>
				<iframe>
				</iframe>

			</div>

		</div>
		<!--中間下層區塊結束-->
EOF;
return $body2;
}
?>