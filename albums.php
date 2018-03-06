<?php
require 'head.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $(".track").click(function () {
            var sn = $(this).prop("name");
            sn = parseInt(sn);
            $("#" + sn).slideToggle("slow");
        });
    });
</script>
<style>
    .track {
        text-decoration: none;
        color: black;
        min-width: 0px;
    }
    .album img{
        max-width: 220px;
    }
</style>
<div class="album">
    <h1>Albums</h1>
    <button class="track" name="1">
    <img src="/images/peter-hollens-covers-vol1_1.png" />
     ˅</button>
    <div class="tracks" id="1">
        <table>
            <tr><th>#</th><th>Title</th><th>Time</th></tr>
            <tr><td>1</td><td>Firework</td><td>3:10</td></tr>
            <tr><td>2</td><td>Someone That I used to Know</td><td>4:00</td></tr>
            <tr><td>3</td><td>I Won't Give Up</td><td>4:00</td></tr>
            <tr><td>4</td><td>Without You(feat. J Rice)</td><td>3:32</td></tr>
            <tr><td>5</td><td>Born This Way</td><td>2:40</td></tr>
            <tr><td>6</td><td>Pray</td><td>3:32</td></tr>
            <tr><td>7</td><td>Turning Tables/ Someone Like You</td><td>4:12</td></tr>
            <tr><td>8</td><td>Need You Now</td><td>2:46</td></tr>
            <tr><td>9</td><td>What's My Name/ Only Girl</td><td>2:58</td></tr>
            <tr><td>10</td><td>Moves Like Jagger</td><td>3:20</td></tr>
            <tr><td>11</td><td>Season of Love</td><td>2:47</td></tr>
            <tr><td>12</td><td>It Will Rain</td><td>4:41</td></tr>
            <tr><td>13</td><td>Lullaby</td></td><td>3:31</td></tr>
        </table>
    </div>
</div>
<div class="album">
    <button class="track" name="2">
    <img src="/images/peter-hollens-covers-vol2_1.png" />
     ˅</button>
    <div class="tracks" id="2">
        <table>
            <tr><th>#</th><th>Title</th><th>Time</th></tr>
            <tr><td>1</td><td>Some Nights</td><td>4:23</td></tr>
            <tr><td>2</td><td>Home</td><td>3:02</td></tr>
            <tr><td>3</td><td>Young Girls</td><td>3:02</td></tr>
            <tr><td>4</td><td>Dark Side</td><td>3:34</td></tr>
            <tr><td>5</td><td>Falling Slowly</td><td>3:56</td></tr>
            <tr><td>6</td><td>Not Over You</td><td>3:35</td></tr>
            <tr><td>7</td><td>Turn Up the Music</td><td>3:48</td></tr>
            <tr><td>8</td><td>Wide Awake</td><td>3:44</td></tr>
            <tr><td>9</td><td>Lights</td><td>3:30</td></tr>
            <tr><td>10</td><td>Gotta be You</td><td>3:20</td></tr>
            <tr><td>11</td><td>Never Ever Getting Back</td><td>3:12</td></tr>
            <tr><td>12</td><td>Don't Stop Me Now</td><td>3:32</td></tr>
            <tr><td>13</td><td>The Prayer</td></td><td>4:14</td></tr>
        </table>
    </div>
</div>
<div class="album">
    <button class="track" name="3">
    <img src="/images/1peter_hollens_1.jpg" />
     ˅</button>
    <div class="tracks" id="3">
        <table>
            <tr><th>#</th><th>Title</th><th>Time</th></tr>
            <tr><td>1</td><td>I See Fire</td><td>4:53</td></tr>
            <tr><td>2</td><td>Skyrim</td><td>3:15</td></tr>
            <tr><td>3</td><td>I Won't Give Up</td><td>4:03</td></tr>
            <tr><td>4</td><td>Les Miserables Medley</td><td>4:01</td></tr>
            <tr><td>5</td><td>Still Haven't Found</td><td>3:36</td></tr>
            <tr><td>6</td><td>Shenandoah</td><td>3:09</td></tr>
            <tr><td>7</td><td>She Moved Through the Fair</td><td>3:25</td></tr>
            <tr><td>8</td><td>Hallelujah</td><td>4:03</td></tr>
            <tr><td>9</td><td>Special Love</td><td>3:45</td></tr>
            <tr><td>10</td><td>The Parting Glass</td><td>3:17</td></tr>
            <tr><td>11</td><td>Black is the Color</td><td>4:40</td></tr>
            <tr><td>12</td><td>Ashland's Song</td><td>3:50</td></tr>
            <tr><td>13</td><td>Misty Mountains</td></td><td>4:18</td></tr>
        </table>
    </div>
</div>
<div class="album">
    <button class="track" name="4">
    <img src="/images/misty_mountains.jpg" />
     ˅</button>
    <div class="tracks" id="4">
        <table>
            <tr><th>#</th><th>Title</th><th>Time</th></tr>
            <tr><td>1</td><td>I See Fire</td><td>4:53</td></tr>
            <tr><td>2</td><td>Song of the Lonely Mountain</td><td>3:52</td></tr>
            <tr><td>3</td><td>In Dreams</td><td>3:30</td></tr>
            <tr><td>4</td><td>Misty Mountains</td><td>4:18</td></tr>
            <tr><td>5</td><td>Edge of Night</td><td>1:20</td></tr>
            <tr><td>6</td><td>Song of Durin</td><td>2:40</td></tr>
            <tr><td>7</td><td>May it Be</td><td>3:39</td></tr>
            <tr><td>8</td><td>Arwen's Song</td><td>2:12</td></tr>
            <tr><td>9</td><td>Into the West</td><td>4:46</td></tr>
            <tr><td>10</td><td>The Last Goodbye</td><td>3:55</td></tr>
        </table>
    </div>
</div>
<div class="album">
    <button class="track" name="5">
    <img src="/images/peter_hollens_covers_3_unsigned.png" />
     ˅</button>
    <div class="tracks" id="5">
        <table>
            <tr><th>#</th><th>Title</th><th>Time</th></tr>
            <tr><td>1</td><td>Baba Yetu</td><td>3:38</td></tr>
            <tr><td>2</td><td>Mad World</td><td>2:56</td></tr>
            <tr><td>3</td><td>Game of Thrones</td><td>2:48</td></tr>
            <tr><td>4</td><td>Pirates Medley</td><td>3:09</td></tr>
            <tr><td>5</td><td>Star Wars Medley</td><td>4:22</td></tr>
            <tr><td>6</td><td>Where No One Goes</td><td>2:35</td></tr>
            <tr><td>7</td><td>Lava</td><td>5:56</td></tr>
            <tr><td>8</td><td>Desrt Rose</td><td>4:47</td></tr>
            <tr><td>9</td><td>A Thousand Years</td><td>2:45</td></tr>
            <tr><td>10</td><td>Sound of Silence</td><td>3:16</td></tr>
        </table>
    </div>
</div>
<?php
require 'foot.php';
?>
