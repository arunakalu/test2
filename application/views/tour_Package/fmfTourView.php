<?php // var_dump($facilityArr[0]); die();?>


<style>
    .hotdeal-hotel-img-big{width: 100%; margin: 4%;margin-left: 0;border-radius: 3px;box-shadow: 2px 3px 2px -2px #057;border: solid white 3px;}
    .hotdeal-hotel-img{width: 100%; margin: 1%;margin-left: 0;border-radius: 3px;box-shadow: 2px 3px 2px -2px #057;border: solid white 3px;}
    .submit-button{float: right;border: none;color: white;background-color: #057;padding: 1%;width: 48%;font-size: 15px;}
    .hot-deal-container{margin-left: 1%;margin-bottom: 1%;border: solid white 2px;transition: border .5s;
                        background: #ffffff; /* Old browsers */
                        background: -moz-linear-gradient(left,  #ffffff 0%, #f1f6fc 60%, #f1f6fc 100%); /* FF3.6+ */
                        background: -webkit-gradient(linear, left top, right top, color-stop(0%,#ffffff), color-stop(60%,#f1f6fc), color-stop(100%,#f1f6fc)); /* Chrome,Safari4+ */
                        background: -webkit-linear-gradient(left,  #ffffff 0%,#f1f6fc 60%,#f1f6fc 100%); /* Chrome10+,Safari5.1+ */
                        background: -o-linear-gradient(left,  #ffffff 0%,#f1f6fc 60%,#f1f6fc 100%); /* Opera 11.10+ */
                        background: -ms-linear-gradient(left,  #ffffff 0%,#f1f6fc 60%,#f1f6fc 100%); /* IE10+ */
                        background: linear-gradient(to right,  #ffffff 0%,#f1f6fc 60%,#f1f6fc 100%); /* W3C */
                        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f1f6fc',GradientType=1 ); /* IE6-9 */

    }
    .hot-deal-container:hover{border: solid #3A77BD 2px;}
    .room-type-text{font-size: 15px;}
    .set-margine-5{margin: 5px;margin-left: 0px;}
    .slider_image{border: solid white 5px;width: 100%;}
    .thumnail{border: solid white 3px;transition: border .5s;width: 32%;margin-bottom: 4%;}
    .thumnail:hover{border: solid #057 3px;}
    .text-crossed{text-decoration: line-through;color: red;font-size: 15px;margin-right: 5%;}
    .special-price{color: #F1901D; font-size: 25px;}
    .save-price{color: #F1901D; font-size: 18px;}

    .book-btn{margin-top: 10px;border: none; background-color: #219cdb;font-size: 15px;color: white;padding: 3px;padding-left: 5px;padding-right: 5px;}
    .voucher-btn{border: none;background-color: #ffb709;font-size: 15px;color: white;padding: 3px;padding-left: 5px;padding-right: 5px;}
    .btn-shade{box-shadow: 0px 0px 0px 0px #ccc;transition: box-shadow .6s;}
    .btn-shade:hover{box-shadow: 0px 0px 3px 1px #ccc;}
    .width-100{width: 100%;float: left;}
    .discount-tag-fmf{background-image: url('/images/FMF-discount.png');width: 60%;height: 150%;float: left;font-size: 23px;margin-top: 3%;margin-left: 3.4%;color: #0071a9;padding: 1.3%;padding-left:  39%;padding-top: 1.5%;line-height: 25px;background-size: cover;}
    .discount-tag-scb{background-image: url('/images/SCB-discount-tag.png');width: 60%;height: 150%;float: left;font-size: 23px;margin-top: 3%;margin-left: 3.4%;color: #0071a9;padding: 1.3%;padding-left:  39%;padding-top: 1.5%;line-height: 25px;background-size: cover;}
    .discount-tag-april{background-image: url('//fmffiles.s3.amazonaws.com/images/hotel-mng-sys/SCB-discount-tag.png');width: 60%;height: 150%;float: left;font-size: 23px;margin-top: 3%;margin-left: 3.4%;color: #0071a9;padding: 1.3%;padding-left:  39%;padding-top: 1.5%;line-height: 25px;background-size: cover;}
    .happy-hour-tag{background-image: url('/images/happyHourDescript.png');height: 28px;width: 100%;float: left;margin-left: 8px;margin-top: 3%;padding: 1.3%;padding-left:  39%;padding-top: 1.5%;line-height: 25px;background-size: cover;}
    li{line-height: 20px;}
    .incPad{border-radius: 0px 0px 10px 10px;margin-left: 12px;margin-top: -11px;margin-bottom: 10px;background-color: rgb(254, 241, 174);border: 1px dashed red;border-top: none;}
</style>
</head>

<body>

    <div id="fb-root"></div>

    <script>(function (d, s, id) {
         
    </script>

    <div class="body_wrapper fixed_nav_pad">

        <?php //$this->load->view('template/nav-menu'); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="common-div" class="deal_widget set_margin_top_82">
                        <div style="width: 98%;">
                            <div class="col-md-12 hot-deal-container" style="padding: 1%;">
                                <div class="col-md-12">
                                    <div class="col-md-9">

                                        <h2 class="margine-left-1" >Tour : <?= $tour_name ?></h2>   
                                        <i></i>
                                    </div>
                                    <a href="/hotel-hot-deals">
                                        <div class="col-md-3">
                                            <div class="col-md-2">
                                                <img src="/images/flame.png" style="width: 20px;float: right;margin-top: 15px;">
                                            </div>
                                            <div class="col-md-10">
                                                <h4>
                                                    <span class="h5">Click here for more Tour Packages. </span>
                                                    <br>             
                                                </h4>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="col-md-12">
                                    <hr class="set-margine-5">
                                </div>
                                <div class="col-md-12" id="image_slider">

                                    <!--HD images slider-->
                                    <div class="col-md-8">
                                        <?php
                                       // $dirF = "hmgt/assist/photo-gallery/$tour_id/Views";
                                       // $dirRooms = "/hmgt/assist/photo-gallery/$tour_id/Room";
                                       // $filesF = scandir($dirF);

                                        //$viewPicture = array();

                                       // foreach ($filesF as $file) {
                                            //filter empty file names
                                        //    if (strlen($file) > 5) {
                                        //        array_push($viewPicture, $file);
                                        //    }
                                        //}
                                        ?>

                                        <img id="slider_image" alt="main images" class="slider_image" src="">
                                    </div>
                                    <!--Thumbnail images-->
                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-10">
                                        <h3>About <?php echo $tour_name; ?></h3>
                                        <hr class="set-margine-5">
                                        <?php echo $description; ?>

                                        <?php  ?>
                                    </div>
                                    <div class="col-md-2">
                                        <b><?= $tour_name ?></b> <br>contact details
                                        <hr>
                                        
                                        <style>
                                            .outer {
                                                overflow: auto;
                                            }
                                            .outer .inner {
                                                list-style-type: none;
                                                float: left;
                                            }
                                            .outer .inner .inner2 i {
                                                background: #205D7A;
                                                color: #fff;
                                                width: 30px;
                                                height: 30px;
                                                border-radius: 4px;
                                                font-size: 20px;
                                                text-align: center;
                                                margin-right: 10px;
                                                padding-top: 15%;
                                            }
                                        </style>

                                        <p class="col-md-12" id="contactDisplay" style="margin-top: 10px;color: blue;"> 

                                        </p>
                                        <script>
                                            $(".contact_add").click(function () {
                                                var info = "<?= $hot_hotel_arr['address']; ?>";
                                                $("#contactDisplay").html(info);
                                            });

                                            $(".contact_mob").click(function () {
                                                var info = "<?= str_replace('|', '<br>', $reservation); ?>";
                                                $("#contactDisplay").html(info);
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  First method Start -->
                        <div style="width: 98%;">
                            <?php
                            $optionCount = 0;
                            
                            $array_size = sizeof($package);

                            foreach ($package as $index => $package_details_info) {

                                if ($index < 3) {
                                    $optionCount++;
                                    ?>

                                    <div class="col-md-12 hot-deal-container" style="padding: 1%;">
                                        <div class="col-md-1" style="text-align: center; margin-top: 15px;">
                                            <div>    <i class="fa fa-fire fa-2x" style="color: #4E728C;"></i></div>
                                            TOUR DEAL
                                            <br>                                                                                 
                                            <span style="color: #AFAFAF;margin: 0px;font-size: 13px;">
                                            Option <?php echo $optionCount; ?>
                                            </span>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="col-md-4">
                                                <img class="hotdeal-hotel-img" src="image" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="room-type-text"><?= $package_details['pack_title'] //. " " . $package_details_info['board_basis'] ?></span>                                        
                                                <hr class="set-margine-5">
                                                <i style="color: red;">
                                                    <?php for ($package_details['pack_occupancy'] = 0; $package_details['pack_occupancy'] < (int) $package_details['pack_occupancy']; $package_details['pack_occupancy']++) { ?>
                                                        <i class="fa fa-user" style="width: 15px;height: 15px;color: orange;"></i>    
                                                    <?php } ?>
                                                </i>
                                                <hr class="set-margine-5">
                                                <div class="col-md-12">
                                                    <div class="col-md-2">
                                                        <i class="fa fa-hand-o-right fa-2x" style="color: #205D7A"></i>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <a class="urlLink" style="color: green;" href="#termsCondition">Free cancellation, instant refund and rooms guaranteed</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                $(".urlLink").click(function () {
                                                    $("html, body").animate({scrollTop: $("#termsCondition").offset().top}, 600);
                                                    return false;
                                                });
                                            </script>
                                        </div>
                                        <div class="col-md-6">
                                            
                                                <div class="col-md-6">                                            
                                                    <span class="room-type-text">Discount : <?php echo $package_details['fmf_discount_pre'] ?>% </span> 
                                                    <hr class="set-margine-5">
                                                    <span class="text-crossed">LKR <?php echo number_format($package_details['regular_pack_rate']); ?> </span> <b class="special-price">LKR <?php echo number_format($package_details['regular_pack_rate'] * ((100 - $package_details['fmf_discount_pre']) / 100)); ?></b>
                                                    <hr class="set-margine-5">
                                                    <i class="save-price"><i class="fa fa-thumbs-up fa-2x" style="width: 15%;"></i>You save : LKR <?php echo number_format($package_details['regular_pack_rate'] - $package_details['regular_pack_rate'] * ((100 - (int) $package_details['fmf_discount_pre']) / 100)); ?></i>                                                
                                                </div>
                                            

                                            <div class="col-md-6" style="height: 30px;">
                                                <!--Select live properties-->
                                                <?php
                                                //if sold out tree special oper.
                                                ?>
                                                <div class="col-md-12" style="text-align: right;">
                                                    <?php
                                                   
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <?php
                                    //Go through array with all options under option IDs              
                                }
                            }
                        ?>
                         <!--   Toggle button  Show / Hide Script -->   
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('.hide-btn').hide();
                                    $(".toggle-false").click(function () {
                                        $("#hot").collapse({
                                            toggle: false
                                        });
                                    });
                                    $(".show-btn").click(function () {
                                        $("#hot").slideDown('show');
                                        $("#hideButton").show();
                                        $('.show-btn').hide();
                                    });
                                    $(".hide-btn").click(function () {
                                        $("#hot").slideUp('hide');
                                        $('.hide-btn').hide();
                                        $('.show-btn').show();
                                    });
                                });
                            </script>      
                    </div>            
                        
                     
                        <!--inclusive -->
                            <div id="hotelFacilities" class="col-md-12">                                
                                <style>
                                    .TcCell{}
                                    .single-black-border{border-bottom: 1px dotted black;padding: 5px;}
                                    .tc-div{background-color: whitesmoke;padding: 20px;border-radius: 5px;margin-bottom: 20px;}
                                </style>

                                <div class="col-md-12 tc-div" style="margin-left: 3px; margin-right: -5px; width: 1100px !important; padding-left: 15px !important; padding-right: 15px !important;">
                                    <h4 class="margine-left-1" style="margin-left: 3px !important;">Inclusive</h4>
                                    <hr>                                                                                                         
                                    
                                  <?php
                                   // if ($hotel_facilities_arr) {
                                     //   foreach ($hotel_facilities_arr as $facilityItem) {
                                      //      ?>
                                    
                                     <?php //if (in_array($facilityItem['id'], $facilityArr)) { ?>
                                            <div class="col-md-4 TcCell">     
                                                <div class="col-md-1">
                                                   
                                                        <img src="//fmffiles.s3.amazonaws.com/images/hotel-hotdeal/img-tick.png" width="15px">
                                                    
                                                                                                           
                                                </div>
                                                <div class="col-md-11 single-black-border">
                                                    <?php
                                                    echo $inclusive_descript;
                                                     ?>
                                                </div>
                                                <?php  ?>
                                            </div>
                                            <?php
                                            //}
                                        //}
                                    //}
                                    ?> 
                                </div>
                            </div>
                        <!-- end of inclusive-->

                        <!-- teams & condition -->
                             <div id="termsCondition" class="col-md-12">                                
                                <style>
                                    .TcCell{}
                                    .single-black-border{border-bottom: 1px dotted black;padding: 5px;}
                                    .tc-div{background-color: whitesmoke;padding: 20px;border-radius: 5px;margin-bottom: 20px;}
                                </style>

                                <div class="col-md-12 tc-div" style="margin-left: 3px; margin-right: -5px; width: 1100px !important; padding-left: 15px !important; padding-right: 15px !important;">
                                    <h4 class="margine-left-1" style="margin-left: 3px !important;">Terms and conditions</h4>
                                    <hr>
                                    <!--Validity period-->
                                    <div class="col-md-6 TcCell">                  
                                        <div class="col-md-1">
                                            <img src="//fmffiles.s3.amazonaws.com/images/hotel-hotdeal/img-tick.png" width="15px">
                                        </div>
                                        <div class="col-md-11 single-black-border">                                            
                                          <!-- valid date should be include. -->
                                        </div>
                                    </div>
                                    <!--cancellation-->
                                    <div class="col-md-6 TcCell">                  
                                        <div class="col-md-1">
                                            <img src="//fmffiles.s3.amazonaws.com/images/hotel-hotdeal/img-tick.png" width="15px">
                                        </div>
                                        <div class="col-md-11 single-black-border">                                            
                                            Free cancellation, within 24hrs of purchase.
                                        </div>
                                    </div>
                                    <!--Only  for srilankans-->
                                    <div class="col-md-6 TcCell">                  
                                        <div class="col-md-1">
                                            <img src="//fmffiles.s3.amazonaws.com/images/hotel-hotdeal/img-tick.png" width="15px">
                                        </div>
                                        <div class="col-md-11 single-black-border">                                            
                                            Valid for Srilankans & resident permit holders.
                                        </div>
                                    </div>
                                    <!--voucher on checkin-->
                                    <div class="col-md-6 TcCell">                  
                                        <div class="col-md-1">
                                            <img src="//fmffiles.s3.amazonaws.com/images/hotel-hotdeal/img-tick.png" width="15px">
                                        </div>
                                        <div class="col-md-11 single-black-border">                                            
                                            Show hotel voucher during check-in.
                                        </div>
                                    </div>
                                    <!--pay extra-->
                                    <div class="col-md-6 TcCell">                  
                                        <div class="col-md-1">
                                            <img src="//fmffiles.s3.amazonaws.com/images/hotel-hotdeal/img-tick.png" width="15px">
                                        </div>
                                        <div class="col-md-11 single-black-border">                                            
                                            Pay extras direct to hotel.
                                        </div>
                                    </div>
                                 
                                </div>
                            </div>
                        <!-- end of term & condition-->
                        <!-- other tour packages. -->
                        <div>
                                <div class="col-md-14 tc-div" style="margin-left: 12px; width: 1100px;">
                                   <!-- <h4 class="margine-left-1">Other tour packages : <?php //echo $city_name; ?></h4> -->
                                    <hr>
                                    <?php //$this->load->view('slider-view', $hotel_info); ?>
                                </div>
                            </div>
                        <!--end-->
                    </div> 
                </div>
            </div>
           
</body>
</html>