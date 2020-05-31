<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->

<div class="footer">
	<div class="technology">
        <div class="ecommerce">
        	<h2>Technology for eCommerce</h2>
            <div class="separator"><img src="<?php print get_template_directory_uri(); ?>/images/devider.png" alt="web_design_company" /></div>
            <div class="icons">
            	<img src="<?php print get_template_directory_uri(); ?>/images/magento.png" height="31" alt="web_design_company" />
                <img src="<?php print get_template_directory_uri(); ?>/images/opencart.png" height="31" alt="web_design_company" />
                <img src="<?php print get_template_directory_uri(); ?>/images/zencart.png" height="40" alt="web_design_company" />
                <img src="<?php print get_template_directory_uri(); ?>/images/pastashop.png" height="46"  alt="web_design_company"/>
            </div>
        </div>
        <div class="cms">
        	<h2>Technology for CMS</h2>
            <div class="separator"><img src="<?php print get_template_directory_uri(); ?>/images/devider.png" alt="web_design_company" /></div>
            <div class="icons">
            	<img src="<?php print get_template_directory_uri(); ?>/images/wordpress.png"  alt="web_design_company"/>
                <img src="<?php print get_template_directory_uri(); ?>/images/joomla.png"  alt="web_design_company"/>
                <img src="<?php print get_template_directory_uri(); ?>/images/drupal.png" alt="web_design_company"/>
                <img src="<?php print get_template_directory_uri(); ?>/images/core.png" alt="web_design_company"/>
            </div>
        </div>
        <div class="cms software">
        	<h2>Technology for Software</h2>
            <div class="separator"><img src="<?php print get_template_directory_uri(); ?>/images/devider.png" alt="web_design_company" /></div>
            <div class="icons">
            	<img src="<?php print get_template_directory_uri(); ?>/images/php_logo.png"  alt="web_design_company" width="60px" class="icon_php" />
                <img src="<?php print get_template_directory_uri(); ?>/images/.NET_logo.png"  alt="web_design_company"/>
                <img src="<?php print get_template_directory_uri(); ?>/images/VS_logo.png" alt="web_design_company"/>
                <img src="<?php print get_template_directory_uri(); ?>/images/java_logo.png" alt="web_design_company"/>
            </div>
        </div>
        <div class="design">
        	<h2>Technology for Design</h2>
            <div class="separator"><img src="<?php print get_template_directory_uri(); ?>/images/devider.png" alt="web_design_company" /></div>
            <div class="icons">
            	<img src="<?php print get_template_directory_uri(); ?>/images/ps.png" alt="web_design_company"/>
                <img src="<?php print get_template_directory_uri(); ?>/images/ai.png" alt="web_design_company" />
                <img src="<?php print get_template_directory_uri(); ?>/images/in.png" alt="web_design_company"/>
                <img src="<?php print get_template_directory_uri(); ?>/images/br.png" style="margin-left:20px;" alt="web_design_company" />
            </div>
        </div>
        <br class="clear" />
    </div>
    <div class="bottom_footer">
    	<span class="left_bottom_footer">Copyright © 2013 <a href="http://dnationsoft.com" class="clearlink">Dnationsoft.com</a>. All rights reserved.</span>
        <span class="right_bottom_footer">Contact with us on <a href="skype:imranertaza?chat" class="clearlink">Skype Chat</a></span>
        <br class="clear" />
    </div>
</div>

    </div><!-- end of web-body -->

<!--Add the following script at the bottom of the web page (before </html>)-->
<script>
    $(".anim-slider").animateSlider(
    {
        autoplay    :true,
        interval    :5000,
        animations  :
        {
            0   :
            {       
                div:
                {
                    show      : "rollIn",
                    hide      : "flipOutX",
                    delayShow : "delay0-5s"
                },
                h2:
                {
                    show      : "rollIn",
                    hide      : "flipOutX",
                    delayShow       : "delay0-5s"
                }
        },
            1   : 
            {   
                div:
                {
                    show      : "bounceInRight",
                    hide      : "flipOutX",
                    delayShow : "delay1-3s"
                }

        },
            2   : 
            {   
                div:
                {
                        show      : "bounceInRight",
                        hide      : "flipOutX",
                        delayShow : "delay2-5s"
                }

        },
            3   : 
            {   
                div:
                {
                        show        : "fadeIn",
                        hide        : "fadeOut",
                        delayShow   : "delay3-1s"
                }

        },
        
            4   : 
            {   
                div:
                {
                        show        : "fadeIn",
                        hide        : "fadeOut",
                        delayShow   : "delay4-0s"
                }

        }
        }
    });
    </script>
    
    

      
    <script>     
        //Google Analytics: change UA-XXXXX-Y to be your site's ID.
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
        
        // End google analytics
        
        
        
        
        jQuery('.scrollup').on('click', function () {
        jQuery("html, body").animate({scrollTop: 0}, 700);
        return false;
    });    
    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scrollup').fadeIn();
        } else {
            jQuery('.scrollup').fadeOut();
        }
    });
        
        
    </script>
<script type="text/javascript" src="https://mylivechat.com/chatinline.aspx?hccid=66266416"></script>
</body>
</html>