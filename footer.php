<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<footer>
    <div class="container">
        <p>The LPL Financial Registered Representatives associated with this site may only
        discuss and/or transact securities business with residents of the following states: MD, CA, CT, DC, FL, GA, IL, MI, NY, NC, OH, PA, SD, VA, WA, WI, WV</p>
        <p>Neil Cain is a Registered Representative with and Securities and Advisory Services offered through LPL Financial, a Registered Investment Advisor. Member FINRA/SIPC</p>
    </div>
</footer>
<script>
    $(function() {
        var nav = $("#main-nav");
        $(window).scroll(function() {
            if (window.pageYOffset >= nav.offset().top)
                $('body').addClass("fixed");
            if ($('body').hasClass("fixed") && window.pageYOffset < 65)
                $('body').removeClass("fixed");
        });
    });
</script>
</body>
</html>