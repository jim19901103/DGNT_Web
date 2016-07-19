<div class="container">
<div class="row LivesVideoBlock">
<div class="col-xs-12 col-md-12">
<div class="uk-slidenav-position" data-uk-slider="{center:true}">
    <!-- Video Block -->
    <div class="uk-slider-container">
        <ul class="uk-slider uk-grid-width-medium-1-3" id="Ultest" style="min-width: 1350px; min-height: 83px; transform: translateX(61.75px);">
            <li class="uk-slide-before" style="left: 0px; width: 150px;"><iframe class="VideoSizeBlock" src=<?=$data['DouVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
            <li class="uk-active" style="left: 150px; width: 150px;"><iframe class="VideoSizeBlock" src=<?=$data['MainVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
            <li class="uk-slide-after" style="left: 300px; width: 150px;"><iframe class="VideoSizeBlock" src=<?=$data['WenVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
            <li class="uk-slide-after" style="left: 450px; width: 150px;"><iframe class="VideoSizeBlock" src=<?=$data['BokeNekoVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
            <li class="uk-slide-after" style="left: 600px; width: 150px;"><iframe class="VideoSizeBlock" src=<?=$data['JKVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
            <li class="uk-slide-after" style="left: 750px; width: 150px;"><iframe class="VideoSizeBlock" src=<?=$data['PurpleVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
            <li class="uk-slide-before" style="left: -450px; width: 150px;"><iframe class="VideoSizeBlock" src=<?=$data['ShainNaitoVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
            <li class="uk-slide-before" style="left: -300px; width: 150px;"><iframe class="VideoSizeBlock" src=<?=$data['MizuNoShinkuVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
            <li class="uk-slide-before" style="left: -150px; width: 150px;"><iframe class="VideoSizeBlock" src=<?=$data['RokuBanVideo'];?> autoplay="0" frameborder="0" draggable="false" allowfullscreen></iframe></li>
        </ul>
    </div>

    <!-- 左右切換 -->
    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous" draggable="false"></a>
    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next" draggable="false"></a>

    <!-- 選擇要看哪個實況主區塊 -->
    <div class="row VideoChoiceBlock">
    <div class="col-xs-12 col-md-12">
        <ul class="ChoiceVideoPicUL">
            <li class="ChoiceVideoPic" id="VideoPic1"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="1" draggable="false""><?=$data['DouTitle'];?></a></li>
            <li class="ChoiceVideoPic" id="VideoPic2"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="2" draggable="false""><?=$data['MainTitle'];?></a></li>
            <li class="ChoiceVideoPic" id="VideoPic3"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="3" draggable="false""><?=$data['WenTitle'];?></a></li>
            <li class="ChoiceVideoPic" id="VideoPic4"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="4" draggable="false""><?=$data['BokeNekoTitle'];?></a></li>
            <li class="ChoiceVideoPic" id="VideoPic5"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="5" draggable="false""><?=$data['JKTitle'];?></a></li>
            <li class="ChoiceVideoPic" id="VideoPic6"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="6" draggable="false""><?=$data['PurpleTitle'];?></a></li>
            <li class="ChoiceVideoPic" id="VideoPic7"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="7" draggable="false""><?=$data['ShainNaitoTitle'];?></a></li>
            <li class="ChoiceVideoPic" id="VideoPic8"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="8" draggable="false""><?=$data['MizuNoShinkuTitle'];?></a></li>
            <li class="ChoiceVideoPic" id="VideoPic9"><a href="#" data-uk-slider-item="CharacterVideo" slider-item-value="0" draggable="false""><?=$data['RokuBanTitle'];?></a></li>
        </ul>
    </div>
    </div>
</div>
</div>
</div>









</div>












