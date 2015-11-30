<div class="container" id="xFooter">

    <div class="row">

        <div class="col-md-12">


         <?php //include(ROOT_PATH . "/application/views/template/footer-tab.php"); ?>


        </div>

    </div>

</div>





<div class="clearfix"></div>

</div></div>

<div class="all_foot_wrap hidden-xs"> 
    <div class="container_foot set_margin_top_16">
        <div class="content">
            <div class="row"> 
                <div class="container" >
                    <div class="footer_links_2">
                        <div class="col-md-4">
                            <img src="/dist/images/grey.gif" alt="findmyfare logo" data-src="/dist/images/logo.png" >
                            <p> Findmyfare.com allows you to search, compare and select the flight you want with a just a few clicks. Plan your dream trip with affordable fares, utmost convenience and freedom from the conscious service provider. Findmyfare.com also pioneers in providing innovative travel solutions.</p>
                            <div class="social_footer_links_wrap">
                                <span><a href="https://www.facebook.com/findmyfare" class="social_link_1"><i class="fa fa-facebook"></i></a></span>
                                <span><a href="https://plus.google.com/+Findmyfare/posts" class="social_link_2"><i class="fa fa-google-plus"></i></a></span>
                                <span><a href="https://twitter.com/findmyfare" class="social_link_3"><i class="fa fa-twitter"></i></a></span>
                                <span><a href="https://www.youtube.com/channel/UCn4aGiwK4BLYmCfOxvz7lSg" class="social_link_4"><i class="fa fa-youtube"></i></a></span>
                                <span><a href="https://www.linkedin.com/company/findmyfare-com" class="social_link_5"><i class="fa fa-linkedin"></i></a></span>

                            </div> </div>
                       <?php
                        $xmlpath = 'xml';
                        if (isset($_GET["chk"]) && $_GET["chk"] == 'preview') {
                            $xmlpath = 'xml-preview';
                        }
                        $tit = '';
                        $sametit = '';
                        $output = '';
                       // $footer_tabs = load_xml_file(ROOT_PATH . "/cms/$xmlpath/footer_link.xml");

                       /* for ($k = 0; $k < sizeof($footer_tabs->footerTab_links_item); $k++) {

                            $title = (string) $footer_tabs->footerTab_links_item[$k]->title;
                            $nameF = (string) $footer_tabs->footerTab_links_item[$k]->name;
                            $linkF = (string) $footer_tabs->footerTab_links_item[$k]->link;

                            if ($tit == '' || $sametit != $title) {

                                if ($tit != '' && $sametit != $title) {
                                    $output .= '</div>
                                </div>';
                                }
                                $tit = $title;
                                $output .= '<div class="col-md-2"><div class = "foot_link_group_title"><h6><strong>' . $title . '</strong></h6></div><div class = "footer_link_2_group">';
                            }
                            $sametit = $title;
                            $output .= '<div><a href = "' . $linkF . '">' . $nameF . '</a></div>';
                        }

                        echo $output; */
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>                    
            </div>                
        </div> <!-- linkes grup2 -->
    </div>

    <div class="sponsor_wrap hidden-sm hidden-xs">
        <div class="content"><div class="row">
                <div class="container">
                    <div class="sponsers">
                        <!--                        <div class="col-md-2 sponser_item item_1"></div>-->
                        <div class="col-md-2 sponser_item item_2"></div>
                        <div class="col-md-2 sponser_item item_3"></div>
                        <div class="col-md-2 sponser_item item_4"></div>
                        <div class="col-md-2 sponser_item item_5"></div>
                        <div class="col-md-2 sponser_item item_6"></div>
                        <div class="clearfix"></div> 
                    </div>
                </div></div></div> 
    </div>

    <div class="container_foot">
        <div class="footer_below_wrap">
            <div class="content container">
                <div class="row">
                    <div class="col-md-12" >
                        <div class="col-md-4">
                            &nbsp;© FindMyFare 2015. All right reserved.
                        </div>
                        <div class="col-md-8">
                            <div class="footer_sub_links_wrap">
                                <a href="about">About Us</a><a href="faq">FAQ</a><a href="/privacy"> Privacy</a><a href="/security-info"> Security</a><a href="termsconditions"> Terms and Condition</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>                        
                </div>                    
            </div> <!-- all rights -->
        </div>            
    </div>        
</div>




<script>
    $(document).ready(function () {
        $("img").unveil();
    });
</script>

<script>


<?php include(ROOT_PATH . "/application/views/inline-js/bootstrap-lib.php"); ?>
<?php include(ROOT_PATH . "/application/views/inline-js/footer-tab.php"); ?>
<?php include(ROOT_PATH . "/application/views/inline-js/unveil-lib.php"); ?>
<?php //include(ROOT_PATH."/application/views/inline-js/bootstrap-lib.php");   ?>
<?php //$this->load->view('inline-js/datepicker-lib'); ?>
<?php //$this->load->view('inline-js/custom'); ?>
</script>




<script src="/dist/js/custom/custom.js"></script>
<script src="/dist/js/custom/jquery-ui.js"></script>


<?php 

//<!--<script src="/dist/js/lib/bootstrap.min.js"></script>
//<script src="/dist/js/custom/tab.js"></script>

//<script src="/dist/js/custom/custom.js"></script>
//<script src="/dist/js/lib/unveil.js"></script>-->
//<!--<script src="/dist/js/custom/jquery-ui.js"></script>
//<script src="/dist/js/custom/custom.js"></script>

?>






<a href="#0" class="cd-top  cd-fade-out">Top</a>



<script>
    jQuery(document).ready(function ($) {
        var offset = 300, offset_opacity = 1200, scroll_top_duration = 700, $back_to_top = $(".cd-top");
        $(window).scroll(function () {
            $(this).scrollTop() > offset ? $back_to_top.addClass("cd-is-visible") : $back_to_top.removeClass("cd-is-visible cd-fade-out"), $(this).scrollTop() > offset_opacity && $back_to_top.addClass("cd-fade-out")
        }), $back_to_top.on("click", function (o) {
            o.preventDefault(), $("body,html").animate({scrollTop: 0}, scroll_top_duration)
        });
    });

</script>

 <?php
    
    
       $xmlpath = 'xml';
    if (isset($_GET["chk"]) && $_GET["chk"] == 'preview') {
        $xmlpath = 'xml-preview';
    }

    if (file_exists('cms/' . $xmlpath . '/mtags/before-body-tag-close.xml')) {
        $xml = simplexml_load_file('cms/' . $xmlpath . '/mtags/before-body-tag-close.xml');
        
       
        
        if($xml->mtag->is_active == "1"){
            
            
            
            echo $xml->mtag->description;
            
            
        }
        
        
    }
    ?>










 <?php
    
    
       $xmlpath = 'xml';
    if (isset($_GET["chk"]) && $_GET["chk"] == 'preview') {
        $xmlpath = 'xml-preview';
    }

    if (file_exists('cms/' . $xmlpath . '/mtags/footer.xml')) {
        $xml = simplexml_load_file('cms/' . $xmlpath . '/mtags/footer.xml');
        
       
        
        if($xml->mtag->is_active == "1"){
            
            
            
            echo $xml->mtag->description;
            
            
        }
        
        
    }
    ?>

</body>




</html>

