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
		<div id="MiddleCenterBlock">
			<div class="MiddleCenterBlockFig1"><a href="https://livehouse.in/channel/388060" target="_blank"><img src="1.png"/></a></div>
			<div class="MiddleCenterBlockFig2"><a href="https://livehouse.in/channel/388060" target="_blank"><img src="2.png"/></a></div>
			<div class="MiddleCenterBlockFig3"><a href="https://livehouse.in/channel/388060" target="_blank"><img src="3.png"/></a></div>
			<div class="MiddleCenterBlockFig4"><a href="https://livehouse.in/channel/388060" target="_blank"><img src="4.png"/></a></div>
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


<?php
function getBlogBody(){
$bodyforblog =<<<EOF
	<!--中間上層區塊開始-->
		<div class="MiddleTopBlock">
			<ul id="BlogUlUse">
				<li><a href="https://www.ptt.cc/bbs/Soft_Job/M.1453137664.A.52D.html?platform=hootsuite" target="_blank">前端入門心得</a>
				</li>
				<li><a href="http://www.appledaily.com.tw/appledaily/article/headline/20160122/37025234/" target="_blank">遊戲橘子首創 帶薪休假無上限</a>
				</li>
				<li><a href="http://drops.wooyun.org/web/11837" target="_blank">PHP DOS漏洞的新利用：CVE-2015-4024 Reviewed</a>
				</li>
				<li><a href="http://www.bilibili.com/video/av3569198/" target="_blank">24小时绝对不准笑</a>
				</li>
				<li><a href="https://www.cool3c.com/article/101281" target="_blank">癮科技 x FIISER提供的試玩頻道</a>
				</li>
				<li><a href="http://buzzorange.com/vidaorange/2016/01/19/tofu-motion-graphics-design-creativity/" target="_blank">雅緻設計2 分鐘傳授 29 個創意心法</a>
				</li>
				<li><a href="http://www.techbang.com/posts/41117-flash-is-not-java-dead-lie-flat-oracle-no-longer-supports-the-java-browser-plug-in" target="_blank">Flash 未死 Java 先躺平</a>
				</li>
				<li><a href="http://www.inside.com.tw/2013/12/20/59-hilarious-but-true-programming-quotes-for-software-developers" target="_blank">工程師 59 條搞笑但卻真實無比的語錄</a>
				</li>
			</ul>
		</div>
	<!--中間上層區塊結束-->
EOF;
return $bodyforblog;
}
?>

