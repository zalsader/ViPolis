     <?= $this->Html->css('style') ?>
     <script src="//code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
             <?= $this->Html->script('countdown') ?>
    <!---start-wrap---->
    <div class="header">
        <div class="wrap">
            <div class="logo"><a href="#">Vi<span>Polis</span></a></div>
        </div>
    </div>
    <!---start-content---->
    <div class="content">
        <div class="content-info">
            <h1>Vi<span>Polis</span> is almost ready.</h1>
        </div>
        <!---start-count-down-timer---->
        <ul id="countdown">
            <li>
                <span class="days">30</span>
                <h3>Days</h3>
            </li>
            <li>
                <span class="hours">21</span>
                <h3>hours</h3>
            </li>
            <li>
                <span class="minutes">22</span>
                <h3>minutes</h3>
            </li>
            <li>
                <span class="seconds">44</span>
                <h3>seconds</h3>
            </li>	
        </ul>
        <!---End-count-down-timer---->
        <!----start---notify-form---->
        <div class="notify">
            <h3>Stay Tuned!</h3>
        </div>
        <!----start---notify-form---->
        <?php /* <!---start-social-icons---->
          <div class="social-icons">
          <h3>Catch on</h3>
          <ul>
          <li><a href="#"><img src="web/images/facebook.png" title="facebook"></a></li>
          <li><a href="#"><img src="web/images/twitter.png" title="Twiiter"></a></li>
          <li><a href="#"><img src="web/images/rss.png" title="Rss"></a></li>
          <li><a href="#"><img src="web/images/gpluse.png" title="Google+"></a></li>
          </ul>
          </div>
          <!---End-social-icons----> */ ?>
        <!---start-copy-right---->
        <div class="spacer"></div>
        <div class="copy-right">
            <p>&copy 2013 i'm coming.All Rights Reserved.Design by <a href="http://w3layouts.com/">w3layouts</a></p>
        </div>
        <!---End-copy-right---->
    </div>
    <!---End-content---->
    <!---End-wrap---->
    <script>
        $(document).ready(function () {
            $("#countdown").countdown({
                date: "19 june 2016 12:00:00",
                format: "on"
            },function () {});
        });
    </script>

