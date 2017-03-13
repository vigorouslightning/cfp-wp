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
        <div class="row">
            <div class="col-lg-6">
                <p>The LPL Financial Registered Representatives associated with this site may only
                discuss and/or transact securities business with residents of the following states: MD, CA, CT, DC, FL, GA, IL, MI, NY, NC, OH, PA, SD, VA, WA, WI, WV</p>
                <p>Neil Cain is a Registered Representative with and Securities and Advisory Services offered through LPL Financial, a Registered Investment Advisor. Member FINRA/SIPC</p>
            </div>
            <div class="col-lg-4 offset-lg-2">
                <h3>Capital Financial Planners</h3>
                <p>1 Olumpic Place Suite 900<br />
                Towson, MD 21204
                </p>
                <p>Phone: (410) 344-2124<br />
                Fax: (240) 235-7108<br />
                office@capitalfinancialplanners.com</p>
            </div>
        </div>
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