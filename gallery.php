<?php
require 'head.php';
?>
<style>
    .imgs{
        display: none;
    }
    :target{
        display: block;
    }
    .pos{
        left: 0;
        width: 100%;
        text-align: center;
        font-size: 18px;
    }
    .pop img{
        width: 300px;
        height: 200px;
        display: inline-block;
    }
    .body{
        z-index: -1;
    }
    #dialog{
        background-color: white;
    }
    #close{
        float: right;
            padding: 20px;
    color: red;
    background-color: white;
    border: 1px solid red;
    font-weight: bold;
    min-width: 10%;
    }
    
</style>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

    var b = 0;
    $('div.ui-dialog-titlebar').css('display', 'none');
    $(function () {
        var sn;
        $("#dialog").dialog({
            resizable: true,
            'width': $(window).width(),
            'height': $(window).height(),
            autoOpen: false
        });

        $(".pop").on("click", function () {
            $('.navcontainer').css('display', 'none');
            $('.footercontainer').css('display', 'none');
            $('.maincontainer').css('display', 'none');
            sn = $(this).attr("name");
            sn = parseInt(sn);
            $("#dialog").dialog("open");
            $("#dialog").css("display", "block");
            $("div.ui-dialog.ui-corner-all.ui-widget.ui-widget-content.ui-front.ui-draggable.ui-resizable").css("display", "block");
            $("#dialog").append("<div class='pos'>"+$(".pop:nth-child("+sn+")").html()+"</div>");
             $("#dialog img").css({"min-width":"30%"},{"height":"inherit"});
            $('div.ui-dialog-titlebar').css('display', 'none');
            $("body").css("overflow", "hidden");
        });
        $("#close").on("click", function () {
            $("body").css("overflow", "scroll");
            $('.navcontainer').css('display', 'block');
            $('.footercontainer').css('display', 'block');
            $('.maincontainer').css('display', 'block');
            $("#dialog").dialog("close");
            $("#dialog .pos").remove();
            $("div.ui-dialog.ui-corner-all.ui-widget.ui-widget-content.ui-front.ui-draggable.ui-resizable").css("display", "none");
        });
    });
</script>
<h1>Gallery</h1>
<div class="gallery">
    <div class="pop" name="1">
        <img src="/images/last_goodbye.jpg"/>
    </div>
    <div class="pop" name="2">
        <img src="/images/Loch_Lomond.jpg" />
    </div>
    <div class="pop" name="3">
        <img src="/images/lights.jpg" />
    </div>
    <div class="pop" name="4">
        <img src="/images/1peter_hollens_1.jpg"/>
    </div>
    <div class="pop" name="5">
        <img src="/images/3misty-mountains-2.jpg" />
    </div>
    <div class="pop" name="6">
        <img src="/images/disney.jpg" />
    </div>
    <div class="pop" name="7">
        <img src="/images/hallejah.jpg" />
    </div>
    <div class="pop" name="8">
        <img src="/images/may_it_be.jpg"/>
    </div>
    <div class="pop" name="9">
        <img src="/images/misty_mountains.jpg" />
    </div>
    <div class="pop" name="10">
        <img src="/images/peter_hollens_covers_3_unsigned.png" />
    </div>
    <div class="pop" name="11">
        <img src="/images/peter-hollens-covers-vol1_1.png" />
    </div>
   <div class="pop" name="12">
        <img src="/images/peter-hollens-covers-vol2_1.png" />
    </div>
    <div class="pop" name="13">
        <img src="/images/prince_of_Egypt.jpg" />
    </div>
    <div class="pop" name="7">
        <img src="/images/hallejah.jpg" />
    </div>
</div>
<div class="imgs">
    <div id="dialog">
        <button id="close" name="1">X</button>
    </div>
</div>

<?php
require 'foot.php';
?>