<div class="VideoDisplayBlock">
<div class="uk-slidenav-position" data-uk-slider="">
<div class="uk-slider-container">
    <ul class="uk-slider uk-grid-width-medium-1-3" id="Ultest">
		<!-- Dou -->
        <li class="uk-slide-before" style="left: 0px; "><iframe class="displaysize" id="LiveViewframe" src=<?=$data['DouVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
        <!-- Main -->
        <li class="uk-slide-before" style="left: 455px; "><iframe class="displaysize" id="LiveViewframe" src=<?=$data['MainVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
        <!-- Wen -->
        <li class="uk-slide-before" style="left: 910px; "><iframe class="displaysize" id="LiveViewframe" src=<?=$data['WenVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
        <!-- 呆貓 -->
        <li class="uk-slide-before" style="left: 1365px; "><iframe class="displaysize" id="LiveViewframe" src=<?=$data['BokeNekoVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
        <!-- JK -->
        <li class="uk-slide-after" style="left: 1820px; "><iframe class="displaysize" id="LiveViewframe" src=<?=$data['JKVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
        <!-- Purple -->
        <li class="uk-slide-after" style="left: 2275px; "><iframe class="displaysize" id="LiveViewframe" src=<?=$data['PurpleVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
        <!-- 耀夜 -->
        <li class="uk-slide-after" style="left: 2730px; "><iframe class="displaysize" id="LiveViewframe" src=<?=$data['ShainNaitoVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
        <!-- 水沉 -->
        <li class="uk-slide-after" style="left: 3185px; "><iframe class="displaysize" id="LiveViewframe" src=<?=$data['MizuNoShinkuVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
        <!-- 六號 -->
        <li class="uk-slide-after" style="left: 3640px; "><iframe class="displaysize" id="LiveViewframe" src=<?=$data['RokuBanVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
    </ul>
</div>

<a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous" draggable="false"></a>
<a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next" draggable="false"></a>

<!-- Video choice flag -->
<ul class="ChoiceVideoPicUL">
	<li class="ChoiceVideoPic" id="VideoPic1"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="0" draggable="false""><?=$data['DouTitle'];?></a></li>
	<li class="ChoiceVideoPic" id="VideoPic2"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="1" draggable="false""><?=$data['MainTitle'];?></a></li>
	<li class="ChoiceVideoPic" id="VideoPic3"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="2" draggable="false""><?=$data['WenTitle'];?></a></li>
	<li class="ChoiceVideoPic" id="VideoPic4"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="3" draggable="false""><?=$data['BokeNekoTitle'];?></a></li>
	<li class="ChoiceVideoPic" id="VideoPic5"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="4" draggable="false""><?=$data['JKTitle'];?></a></li>
	<li class="ChoiceVideoPic" id="VideoPic6"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="5" draggable="false""><?=$data['PurpleTitle'];?></a></li>
	<li class="ChoiceVideoPic" id="VideoPic7"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="6" draggable="false""><?=$data['ShainNaitoTitle'];?></a></li>
	<li class="ChoiceVideoPic" id="VideoPic8"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="7" draggable="false""><?=$data['MizuNoShinkuTitle'];?></a></li>
	<li class="ChoiceVideoPic" id="VideoPic9"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="8" draggable="false""><?=$data['RokuBanTitle'];?></a></li>
</ul>
</div>
</div>