<?php
require 'head.php';
//https://css-tricks.com/snippets/jquery/simple-auto-playing-slideshow/
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var s = 1;
        var c = 1;
        var intv = setInterval(function () {
            if (s >= $('.slideclick').length) {
                c = 1;
            }
            else {
                c = s + 1;
            }
            slide(c);
        }, 3500);
        function slide(n) {
            $(".slide:not(:nth-child(" + n + "n))").hide();
            $(".slideclick:not(:nth-child(" + n + "n))").css("background-color","lightsteelblue");
            $(".slide:nth-child(" + s + ")").hide();
            $(".slideclick:nth-child(" + s + ")").css("background-color","lightsteelblue");
            $(".slide:nth-child(" + n + ")").show();
            $(".slideclick:nth-child(" + n + ")").css("background-color","Royalblue");
            s = parseInt(n);
        }
        $(".slideclick").click(function () {
            var sn = $(this).prop("name");
            if (sn != s) {
                sn = parseInt(sn);
                slide(sn, s);
            }
        });
        function cal() {
            if (s >= $('.slideclick').length) {
                c = 1;
            }
            else {
                c = s + 1;
            }
            slide(c);
        }
        SetInterval(intv);
    });
</script>

<div class="slides">
    <div class="slide">
        <a href="albums.php">
        <img src="images/disney.jpg">
            </a>
    </div>
    <div class="slide">
        <a href="gallery.php">
        <img src="images/hallejah.jpg">
        </a>
    </div>
    <div class="slide">
        <a href="videos.php">
        <img src="images/prince_of_Egypt.jpg">
        </a>
    </div>
    <div class="slide">
        <a href="https://www.youtube.com/user/peterhollens" target="_blank">
        <img src="images/icons/youtube.png">
        </a>
    </div>

    <div class="slidelinks">
        <button class="slideclick" name="1"></button>
        <button class="slideclick" name="2"></button>
        <button class="slideclick" name="3"></button>
        <button class="slideclick" name="4"></button>
    </div>
</div>
<?php
require 'foot.php';
?>
