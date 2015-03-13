	<footer class="[ container u-cushionTop ] sitefooter" role="contentinfo">
        <div class="row u-cap u-padT2">

            <div class="[ col-xs-12 col-md-3 ] copyright">
                <?php echo $site->copyright()->kirbytext() ?>
            </div>

            <div class="[ col-xs-12 col-md-3 ] social">
                <ul class="simple">
                    <li><a href="#">@zedworkshop</a> on Twitter</li>
                    <li><a href="#">zedworkshop</a> on Instagram</li>
                </ul>
            </div>

            <div class="[ col-xs-12 col-md-6 omega-md ] colophon">
                <p><a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b>♥</b></a></p>
            </div>

        </div>
    </footer>

    <?php echo js( 'assets/scripts/vendor.js') ?>
    <?php echo js( 'assets/scripts/main.js') ?>

    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>

</body>
</html>
