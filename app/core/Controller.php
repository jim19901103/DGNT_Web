<?php
// echo "core\Controller.php<br>";

/**
 * The Controll file
 * This class connects the Controller to the Model and View.
 *
 * @copyright Copyright (c) 2016 PoYu Lai
 * @author PoYu Lai
 * @package MVC
 */
class Controller
{
	protected function model($model)
	{
		if ( file_exists(dirname(__FILE__).'/../project/models/' . $model . '.php') )	{
			require_once '/../project/models/' . $model . '.php';
			return new $model();
		} else {
			return False;
		}
	}

	protected function view($view, $data = array())
	{		
		if ( file_exists(dirname(__FILE__).'/../project/views/' . $view . '.blade.php') ) {
			require_once dirname(__FILE__).'/../project/views/' . $view . '.blade.php';
		}
	}

	/*protected function getBodyCenter()
	{
		$body2 = <<<EOF
		<!--中間中層區塊1開始(可用於跑馬燈(各實況主的LINK))-->
		<div id="MiddleCenterBlock">
			<div class="MiddleCenterBlockFig"><a href="https://livehouse.in/channel/388060" target="_blank"><img src="../../public/Images/1.png"/></a></div>
			<div class="MiddleCenterBlockFig"><a href="https://livehouse.in/channel/388060" target="_blank"><img src="../../public/Images/2.png"/></a></div>
			<div class="MiddleCenterBlockFig"><a href="https://livehouse.in/channel/388060" target="_blank"><img src="../../public/Images/3.png"/></a></div>
			<div class="MiddleCenterBlockFig"><a href="https://livehouse.in/channel/388060" target="_blank"><img src="../../public/Images/4.png"/></a></div>
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
				<a href="https://livehouse.in/channel/388060" target="_blank" id="FollowLink">Follow Us<span id="F1"> >><span></a>
			</div>

			<div>
				<iframe>
				</iframe>

			</div>

		</div>
		<!--中間下層區塊結束-->
EOF;
		return $body2;
	}*/
}

