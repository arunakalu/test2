<?php

$urlstring = $this->security->xss_clean($_SERVER['QUERY_STRING']);

if(!empty($urlstring)){
    $urlstring = '?'.$urlstring;
}

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html><head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="shortcut icon" type="image/png" href="https://fmffiles.s3.amazonaws.com/images/favicon.png"/>
<meta name="robots" content="follow, index, all"/> 
        <meta name="Author" content="Findmyfare.com"/>
        <meta name="Copyright" content="findmyfare.com, All Rights Reserved."/>
        <meta name="DC.contributor" content="findmyfare.com"/>
        <meta name="Rating" content="General"/>
        <meta name="distribution" content="Global"/>
        <meta name="language" content="EN-US"/>
        <meta name="doc-type" content="Public"/>
        <meta name="classification" content="travel"/>
        <link rel="alternate" href="https://findmyfare.com" hreflang="en-us"/> 
        <!-- fmf_core = bootstrap !-->
        <link rel="stylesheet" href="/dist/css/core/fmf_core.css"/>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="<?= current_url().$urlstring; ?>"/>
        <meta property="og:image" content="<?= $og_image ?>"/>
        <meta property="og:title" content="<?= $og_title ?>"/>
        <meta property="og:description" content="<?= $og_description ?>"/>
        <title><?= $page_title ?></title>
        <meta name="keywords" content="<?= $meta_keywords ?>"/>
        <meta name="description" content="<?= $meta_description ?>"/>
        <meta http-equiv="x-dns-prefetch-control" content="on">
        <link rel="dns-prefetch" href="//fmffiles.s3.amazonaws.com"/>
          <link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com"/>
            <link rel="dns-prefetch" href="//findmyfare.com"/>
              <link rel="dns-prefetch" href="//cdn.livechatinc.com"/>
        <link rel="publisher" href="https://plus.google.com/+Findmyfare" rel="nofollow"/>
        <link rel="canonical" href="<?= current_url().$urlstring; ?>"/>
        <!--comment user profile css by kalana-->
          <link rel="stylesheet" href="/dist/css/custom/user_profile.css"/>
        <!-- javascripts !-->
        <!--<script src="/dist/js/core/jquery-1.11.1.min.js"></script>-->
        <script><?php include(ROOT_PATH . "/application/views/inline-js/jquery-lib.php");//$this->load->view('inline-js/jquery-lib');?>
        fmf_config = {
                date: "<?= date("m/d/Y"); ?>",
                time: "",
                timeZone: "",
                airPorts: "/citiezz.json",
                monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                calReturnTitle: '<span class="SelDepEle">Select Departure Date  </span>',
                calDepatureTitle: ' <i class="fa fa-calendar"></i> <span class="SelRetEle">Select Return Date <span class="switch-one" id="switch-one"> ( Change to one way ) </span></span> ',
                calClose: ' <span class="close-ui-datepicker"> Close <i class="fa fa-times-circle"></i></span>'
            };
   
            //Live chat
            var __lc = {};
            __lc.license = 3266652;

            (function () {
                var lc = document.createElement('script');
                lc.type = 'text/javascript';
                lc.async = true;
                lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(lc, s);
            })();
            
            </script>

             <?php if (base_url() == 'https://www.findmyfare.com/') { ?>

            <?php
    
    $xmlpath = 'xml';
    if (isset($_GET["chk"]) && $_GET["chk"] == 'preview') {
        $xmlpath = 'xml-preview';
    }

    if (file_exists('cms/' . $xmlpath . '/mtags/header.xml')) {
        $xml = simplexml_load_file('cms/' . $xmlpath . '/mtags/header.xml');
        if($xml->mtag->is_active == "1"){
            echo $xml->mtag->description;
        }
    }
?>
               
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=668303336587427&ev=NoScript" /></noscript>

    <?php } ?>
