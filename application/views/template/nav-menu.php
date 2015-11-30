<?php
/*
 *  FINDMYFARE.COM 
 *  ---------------------------------
 */
?>

<?php
//$siteUrlpath = "http://www.findmyfare.com"; //"http://".$_SERVER['HTTP_HOST'];

$siteUrlpath = "";

$distpath = "";
?> 

<style>
    
    
    
</style>


<div class="header_wrapper ">
    <div class="header" id="res_header">


        <div class="row">
            <div class=" container">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid"> 
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <!-- done -->
                        <div class="navbar-header">
                            <div class="logo scroll_logo" style="    max-width: 85%; margin-top: -7px;" >
                                <a href="<?= $siteUrlpath; ?>/"> <img  src="<?= $distpath; ?>/dist/images/logo.png" alt="findmyfare"/> </a> </div>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <div class="responsive_pull_right pos_rel"  style=" margin-top: -5px">



                                <ul class="nav navbar-nav">

                                    <?php
                                 /*   $xml = load_xml_file(ROOT_PATH.'/xml_cache/main/nav.xml');

                                    foreach ($xml as $navLinks) {

                                        $linkName = $navLinks->name;
                                        $site_url = base_url();
                                        $linkAddr =  str_replace(" ", "", $navLinks->link);
                                        $linkIcon = $navLinks->icon;
                                        $linkDropdown = get_bool($navLinks->dropdown);

                                        $uniqueId = 'nav_' . str_replace(" ", "_", $linkName);

                                        if ($linkDropdown) {

                                            $dropDown = $navLinks->ul->li;

                                            echo '  <li class="dropdown ux-dropdown" id="nav_more"> <a href="#" class="dropdown-toggle scroll_a" data-toggle="dropdown"  > <i class="' . $linkIcon . '"></i> ' . $linkName . ' <b class="caret"></b></a>';
                                            echo '<ul class="dropdown-menu">';

                                            for ($i = 0; $i < sizeof($dropDown); $i++) {

                                                $url = str_replace(" ", "", $dropDown[$i]->link);

                                                if ($url == "blog.findmyfare.com") {
                                                    $site_url = "";
                                                    $url = "http://". $url;
                                                } else {
                                                    $url =  $dropDown[$i]->link;
                                                }


                                                if ($dropDown[$i]->name == "contact") {

                                                    echo ' <li class="ipad_fix_wide" id="nav_dropdown_conatct"><a href="contact" class="scroll_a"><img style="z-index:9999; position: relative" src="/dist/images/' . $dropDown[$i]->icon . '" alt="Telephone number findmyfare" width="160" height="28"></a></li>';
                                                } else if ($dropDown[$i]->name == "SL Hot Deals") {
                                                    echo '<li id="nav_dropdown_hotedeal"><a href="' . $site_url . '/' . $url . '"> <i   class="' . $dropDown[$i]->icon . '"></i> ' . $dropDown[$i]->name . ' </a></li>';
                                                } else {
                                                    
                                                    

                                                    echo '<li><a href="' . $site_url. $url . '"> <i   class="' . $dropDown[$i]->icon . '"></i> ' . $dropDown[$i]->name . ' </a></li>';
                                                }
                                            }
                                            
                                            

                                            echo '</ul>';
                                        } else {
                                            



                                            if ($linkName == "contact") {
                                                
                                                if($this->session->userdata('loggedin_user_id')){
                                                    
                                                    
                                                  $str = $this->session->userdata('full_name');  

                                                if (strlen($str) > 10)
                                                        $str = substr($str, 0, 7) . '...';


                                                    
                                                    
                                                    echo  '<li><a href="/profile"> <i class=" fa fa-user"></i> Hi '.$str.' </a></li>';

                                                    
                                                }else{
                                                
                                                  echo '<li class="dropdown ux-dropdown" id="nav_more"> <a href="#" class="dropdown-toggle scroll_a" data-toggle="dropdown"> <i class=" fa fa-user "></i>  My Account  <b class="caret"></b></a>'
                                    . '<ul class="dropdown-menu">'
                                           . '<li><a href="/login"> <i class=" fa fa-sign-in "></i> Login </a></li>'
                                           . '<li><a href="/register"> <i class=" fa fa-sign-out "></i> Register </a></li>'
                                        . '</ul> </li>';
                                                  
                                                }

                                                echo ' <li class="ipad_fix_wide" id="' . $uniqueId . '"><a href="/contact" class="scroll_a"><img style="z-index:9999; position: relative" src="/dist/images/' . $linkIcon . '"  alt="Telephone number findmyfare" width="160" height="28"></a></li>';
                                            } else {

                                                echo ' <li> <a href="' .$site_url . $linkAddr . '"  id="' . $uniqueId . '" class="scroll_a" > <i  class="' . $linkIcon . '"></i> ' . $linkName . ' </a></li>';
                                            }
                                        }
                                    }
                                    
                                    */

                                    ?>
                                    
                                    
                                    <?php
                                    
                                    
                                    if ('2015-09-04 06:00:00' > date("Y-m-d H:i:s")) {
                                    
                                    ?>
                                    
                                    
                                    <div style="display: block;
left: 60%;
top: 73%;
z-index: 100;
font-size: 11px;
text-align: center;" class="popover bottom">
      <div class="arrow"></div>
      <!--<h3 class="popover-title">We Are Currently offline</h3>-->

      <div class="popover-content">
        <p>Call Center will not be operational from 3rd Sept 9PM to 4th Sept 6AM</p>
      </div>
    </div>
                                    
                                    <?php } ?>


                                </ul>

                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>


    </div>
</div>
<?php echo form_open();
echo form_close(); ?>