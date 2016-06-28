<script type="text/javascript">
jQuery(document).ready(function(){
    var ChildrenLength = 0;
    var pointerFlag = 0;
    var closeFlag = 0;

    //初始畫面
    $("#FormChoice2").animate({left: '+=120'}, "slow");
    $("#FormChoice3").animate({left: '+=120'}, "slow");

    $("#Children1").animate({left: '+=120'}, "slow");
    $("#Children2").animate({left: '+=80'}, "slow");
    $("#Children3").animate({left: '+=40'}, "slow");

    $(".ChildrenBlockTwo").animate({left: '+=120'}, "slow");
    $(".ChildrenBlockThree").animate({left: '+=120'}, "slow");
    pointerFlag = 1;
    closeFlag = 1;

    /*$(document).on('click', '.FormBlock', function() {*/
    $(".FormBlock").click(function(){
        var leftFlag = 0;
        var id = $(this).attr('id');
        switch(id) {
            case 'FormChoice1':
                switch (pointerFlag) {
                    case 0:
                        setFormChoice1(pointerFlag);
                        break;
                    case 1:
                        setFormChoiceClose(closeFlag);
                        break;
                    case 2:
                        setFormChoice1(pointerFlag);
                        break;
                    case 3:
                        setFormChoice1(pointerFlag);
                        break;
                    default:
                        // statements_def
                        break;
                }
                break;

            case 'FormChoice2':
                switch (pointerFlag) {
                    case 0:
                        setFormChoice2(pointerFlag);
                        break;
                    case 1:
                        setFormChoice2(pointerFlag);
                        break;
                    case 2:
                        setFormChoiceClose(closeFlag);
                        break;
                    case 3:
                        setFormChoice2(pointerFlag);
                        break;
                    default:
                        // statements_def
                        break;
                }
                break;

            case 'FormChoice3':
                switch (pointerFlag) {
                    case 0:
                        setFormChoice3(pointerFlag);
                        break;
                    case 1:
                        setFormChoice3(pointerFlag);
                        break;
                    case 2:
                        setFormChoice3(pointerFlag);
                        break;
                    case 3:
                        setFormChoiceClose(closeFlag);
                        break;
                    default:
                        // statements_def
                        break;
                }
                break;

            default:
                //
                break;
        }
    });

        function setFormChoice1(){
            if (pointerFlag == 0) {
                $("#FormChoice2").animate({left: '+=120'}, "slow");
                $("#FormChoice3").animate({left: '+=120'}, "slow");

                $("#Children1").animate({left: '+=120'}, "slow");
                $("#Children2").animate({left: '+=80'}, "slow");
                $("#Children3").animate({left: '+=40'}, "slow");

                $(".ChildrenBlockTwo").animate({left: '+=120'}, "slow");
                $(".ChildrenBlockThree").animate({left: '+=120'}, "slow");
            }

            else if (pointerFlag == 2) {
                $("#FormChoice2").animate({left: '+=120'}, "slow");
                $("#FormChoice3").animate({left: '-=40'}, "slow");

                $("#Children1").animate({left: '+=120'}, "slow");
                $("#Children2").animate({left: '+=80'}, "slow");
                $("#Children3").animate({left: '+=40'}, "slow");

                $("#Children4").animate({left: '-=40'}, "slow");
                $("#Children5").animate({left: '+=0'}, "slow");
                $("#Children6").animate({left: '+=40'}, "slow");
                $("#Children7").animate({left: '+=80'}, "slow");

                $(".ChildrenBlockThree").animate({left: '-=40'}, "slow");
            }

            else if (pointerFlag == 3) {
                $("#FormChoice2").animate({left: '+=120'}, "slow");
                $("#FormChoice3").animate({left: '+=120'}, "slow");

                $("#Children1").animate({left: '+=120'}, "slow");
                $("#Children2").animate({left: '+=80'}, "slow");
                $("#Children3").animate({left: '+=40'}, "slow");

                $(".ChildrenBlockTwo").animate({left: '+=120'}, "slow");

                $("#Children8").animate({left: '-=200'}, "slow");
                $("#Children9").animate({left: '-=160'}, "slow");
                $("#Children10").animate({left: '-=120'}, "slow");
                $("#Children11").animate({left: '-=80'}, "slow");
                $("#Children12").animate({left: '-=40'}, "slow");
                $("#Children13").animate({left: '+=0'}, "slow");
                $("#Children14").animate({left: '+=40'}, "slow");
                $("#Children15").animate({left: '+=80'}, "slow");
            }
            pointerFlag = 1;
            closeFlag = 1;
            $(".ChildrenBlockOne").style.display = "block";
        }

        function setFormChoice2(){
            if (pointerFlag == 0) {
                $("#FormChoice3").animate({left: '+=160'}, "slow");

                $("#Children4").animate({left: '+=160'}, "slow");
                $("#Children5").animate({left: '+=120'}, "slow");
                $("#Children6").animate({left: '+=80'}, "slow");
                $("#Children7").animate({left: '+=40'}, "slow");

                $(".ChildrenBlockThree").animate({left: '+=160'}, "slow");
            }

            else if (pointerFlag == 1) {
                $("#FormChoice2").animate({left: '-=120'}, "slow");
                $("#FormChoice3").animate({left: '+=40'}, "slow");

                $("#Children4").animate({left: '+=40'}, "slow");
                $("#Children5").animate({left: '-=0'}, "slow");
                $("#Children6").animate({left: '-=40'}, "slow");
                $("#Children7").animate({left: '-=80'}, "slow");

                $("#Children1").animate({left: '-=120'}, "slow");
                $("#Children2").animate({left: '-=80'}, "slow");
                $("#Children3").animate({left: '-=40'}, "slow");

                $(".ChildrenBlockThree").animate({left: '+=40'}, "slow");
            }

            else if (pointerFlag == 3) {
                $("#FormChoice3").animate({left: '+=160'}, "slow");

                $("#Children4").animate({left: '+=160'}, "slow");
                $("#Children5").animate({left: '+=120'}, "slow");
                $("#Children6").animate({left: '+=80'}, "slow");
                $("#Children7").animate({left: '+=40'}, "slow");

                $("#Children8").animate({left: '-=160'}, "slow");
                $("#Children9").animate({left: '-=120'}, "slow");
                $("#Children10").animate({left: '-=80'}, "slow");
                $("#Children11").animate({left: '-=40'}, "slow");
                $("#Children12").animate({left: '-=0'}, "slow");
                $("#Children13").animate({left: '+=40'}, "slow");
                $("#Children14").animate({left: '+=80'}, "slow");
                $("#Children15").animate({left: '+=120'}, "slow");
            }
            pointerFlag = 2;
            closeFlag = 2;
            $(".ChildrenBlockTwo").style.display = "block";
        }

        function setFormChoice3(){
            if (pointerFlag == 0) {

                $("#Children8").animate({left: '+=320'}, "slow");
                $("#Children9").animate({left: '+=280'}, "slow");
                $("#Children10").animate({left: '+=240'}, "slow");
                $("#Children11").animate({left: '+=200'}, "slow");
                $("#Children12").animate({left: '+=160'}, "slow");
                $("#Children13").animate({left: '+=120'}, "slow");
                $("#Children14").animate({left: '+=80'}, "slow");
                $("#Children15").animate({left: '+=40'}, "slow");
            }

            else if (pointerFlag == 1) {
                $("#FormChoice2").animate({left: '-=120'}, "slow");
                $("#FormChoice3").animate({left: '-=120'}, "slow");

                $("#Children8").animate({left: '+=200'}, "slow");
                $("#Children9").animate({left: '+=160'}, "slow");
                $("#Children10").animate({left: '+=120'}, "slow");
                $("#Children11").animate({left: '+=80'}, "slow");
                $("#Children12").animate({left: '+=40'}, "slow");
                $("#Children13").animate({left: '+=0'}, "slow");
                $("#Children14").animate({left: '-=40'}, "slow");
                $("#Children15").animate({left: '-=80'}, "slow");

                $("#Children1").animate({left: '-=120'}, "slow");
                $("#Children2").animate({left: '-=80'}, "slow");
                $("#Children3").animate({left: '-=40'}, "slow");

                $(".ChildrenBlockTwo").animate({left: '-=120'}, "slow");
            }

            else if (pointerFlag == 2) {
                $("#FormChoice3").animate({left: '-=160'}, "slow");

                $("#Children8").animate({left: '+=160'}, "slow");
                $("#Children9").animate({left: '+=120'}, "slow");
                $("#Children10").animate({left: '+=80'}, "slow");
                $("#Children11").animate({left: '+=40'}, "slow");
                $("#Children12").animate({left: '+=0'}, "slow");
                $("#Children13").animate({left: '-=40'}, "slow");
                $("#Children14").animate({left: '-=80'}, "slow");
                $("#Children15").animate({left: '-=120'}, "slow");


                $("#Children4").animate({left: '-=160'}, "slow");
                $("#Children5").animate({left: '-=120'}, "slow");
                $("#Children6").animate({left: '-=80'}, "slow");
                $("#Children7").animate({left: '-=40'}, "slow");
            }
            pointerFlag = 3;
            closeFlag = 3;
            $(".ChildrenBlockThree").style.display = "block";
        }

        function setFormChoiceClose (closeFlag) {
            switch (closeFlag) {
                case 1:
                    $("#FormChoice2").animate({left: '-=120'}, "slow");
                    $("#FormChoice3").animate({left: '-=120'}, "slow");

                    $("#Children1").animate({left: '-=120'}, "slow");
                    $("#Children2").animate({left: '-=80'}, "slow");
                    $("#Children3").animate({left: '-=40'}, "slow");

                    $(".ChildrenBlockTwo").animate({left: '-=120'}, "slow");
                    $(".ChildrenBlockThree").animate({left: '-=120'}, "slow");

                    pointerFlag = 0;
                    break;

                case 2:
                    $("#FormChoice3").animate({left: '-=160'}, "slow");

                    $("#Children4").animate({left: '-=160'}, "slow");
                    $("#Children5").animate({left: '-=120'}, "slow");
                    $("#Children6").animate({left: '-=80'}, "slow");
                    $("#Children7").animate({left: '-=40'}, "slow");

                    $(".ChildrenBlockThree").animate({left: '-=160'}, "slow");

                    pointerFlag = 0;
                    break;
                case 3:
                    $("#Children8").animate({left: '-=320'}, "slow");
                    $("#Children9").animate({left: '-=280'}, "slow");
                    $("#Children10").animate({left: '-=240'}, "slow");
                    $("#Children11").animate({left: '-=200'}, "slow");
                    $("#Children12").animate({left: '-=160'}, "slow");
                    $("#Children13").animate({left: '-=120'}, "slow");
                    $("#Children14").animate({left: '-=80'}, "slow");
                    $("#Children15").animate({left: '-=40'}, "slow");

                    pointerFlag = 0;
                    break;
                default:
                    // statements_def
                    break;
            }
        }

    var ImageCont = 0;
    var ExImageCont = 0;

    $("#Children1").click(function(){
        if (ChildrenLength != 2) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(2).show("slow");

            ChildrenLength = 2;
            ExImageCont = ImageCont;
            ImageCont = 2;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children2").click(function(){
        if (ChildrenLength != 1) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(1).show("slow");

            ChildrenLength = 1;
            ExImageCont = ImageCont;
            ImageCont = 1;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children3").click(function(){
        if (ChildrenLength != 0) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(0).show("slow");

            ChildrenLength = 0;
            ExImageCont = ImageCont;
            ImageCont = 0;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children4").click(function(){
        if (ChildrenLength != 6) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(6).show("slow");

            ChildrenLength = 6;
            ExImageCont = ImageCont;
            ImageCont = 6;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children5").click(function(){
        if (ChildrenLength != 5) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(5).show("slow");

            ChildrenLength = 5;
            ExImageCont = ImageCont;
            ImageCont = 5;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children6").click(function(){
        if (ChildrenLength != 4) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(4).show("slow");

            ChildrenLength = 4;
            ExImageCont = ImageCont;
            ImageCont = 4;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children7").click(function(){
        if (ChildrenLength != 3) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(3).show("slow");

            ChildrenLength = 3;
            ExImageCont = ImageCont;
            ImageCont = 3;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children8").click(function(){
        if (ChildrenLength != 14) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(14).show("slow");

            ChildrenLength = 14;
            ExImageCont = ImageCont;
            ImageCont = 14;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children9").click(function(){
        if (ChildrenLength != 13) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(13).show("slow");

            ChildrenLength = 13;
            ExImageCont = ImageCont;
            ImageCont = 13;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children10").click(function(){
        if (ChildrenLength != 12) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(12).show("slow");

            ChildrenLength = 12;
            ExImageCont = ImageCont;
            ImageCont = 12;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children11").click(function(){
        if (ChildrenLength != 11) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(11).show("slow");

            ChildrenLength = 11;
            ExImageCont = ImageCont;
            ImageCont = 11;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children12").click(function(){
        if (ChildrenLength != 10) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(10).show("slow");

            ChildrenLength = 10;
            ExImageCont = ImageCont;
            ImageCont = 10;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children13").click(function(){
        if (ChildrenLength != 9) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(9).show("slow");

            ChildrenLength = 9;
            ExImageCont = ImageCont;
            ImageCont = 9;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children14").click(function(){
        if (ChildrenLength != 8) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(8).show("slow");

            ChildrenLength = 8;
            ExImageCont = ImageCont;
            ImageCont = 8;
            next(ImageCont,ExImageCont);
        }
    });

    $("#Children15").click(function(){
        if (ChildrenLength != 7) {
            $(".content").eq(ChildrenLength).fadeOut("slow");
            $(".content").eq(7).show("slow");

            ChildrenLength = 7;
            ExImageCont = ImageCont;
            ImageCont = 7;
            next(ImageCont,ExImageCont);
        }
    });

    //change character Image
    function next(Cont, ExCont){
     $(".PeopleImageDisplayBlock div").eq(Cont).stop(true,true).
             css("left","100%").animate({"left":"0"});
     $(".PeopleImageDisplayBlock div").eq(ExCont).stop(true,true).
             css("left","0").animate({"left":"-100%"});
    }

    /* 滑鼠移動過去改變標題的顯示圖片 */
    var $contentArray = $('.FormChoiceChildrenBlock img');
    // 當滑鼠移到$contentArray中的某一個img時
    $($contentArray[5]).mouseover(function(){
        //把當前的 src 改成更改後的
        $($contentArray[5]).attr('src', '<?=$data['ChildrenTitleChange5'];?>');
    });
    $($contentArray[5]).mouseout(function(){
        $($contentArray[5]).attr('src', '<?=$data['BokeNeko'];?>');
    });

    $($contentArray[6]).mouseover(function(){
        $($contentArray[6]).attr('src', '<?=$data['ChildrenTitleChange6'];?>');
    });
    $($contentArray[6]).mouseout(function(){
        $($contentArray[6]).attr('src', '<?=$data['KaiKai'];?>');
    });

});
</script>
